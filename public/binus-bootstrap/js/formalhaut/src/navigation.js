/** Navigation for Formalhaut **/
(function ($, $F) {
    "use strict";

    /** Private member **/
    var firstLastHash = '';
    var firstLastHashNoParam = '';
    var secondLastHash = '';
    var lastParam = '';
    var isFirstLoad = true;
    var executionStack = [];
    var scriptStack = [];
    var hashChangeHooks = [];
    var navPopup = null;

    /** Instance member **/
    var nav = {};

    nav.subView = null;
    nav.currentSubView = null;
    nav.rel = '';

    init();

    // Bind the config hook to prepare
    $F.config.hook(function () {
        nav.defaultRel = $F.config.get('defaultRel');
    });

    /** Public Function **/
    $F.nav = {};

    /** Constant **/
    $F.nav.TRIGGER_SCOPE_PARAM = 'param';
    $F.nav.TRIGGER_SCOPE_FULL = 'all';

    // Get current hash in the URL
    $F.nav.getCurrentHash = function getCurrentHash() {
        return location.hash;
    };

    // Get last hash
    $F.nav.getLastHash = function getLashHash(breakHash) {
        if (breakHash) {
            var hash = breakHash.split('.');
            return {
                first: hash[0],
                second: hash[1]
            };
        }

        return $F.nav.getLastHash();
    };

    // Get first section of last hash
    $F.nav.getFirstLastHash = function getFirstLastHash() {
        return firstLastHash;
    };

    // Get second section of last hash (argument)
    $F.nav.getLastParam = function getLastParam() {
        return lastParam;
    };

    // Set the location (hash) to the specific path
    $F.nav.setLocation = function setLocation(path) {
        location.hash = path;
    };

    $F.nav.setNamedParam = function setNamedParam(param, forceTrigger) {
        forceTrigger = forceTrigger || false;

        location.href = $F.util.buildUrl('#/' + firstLastHashNoParam, param);

        if (forceTrigger) {
            $(window).trigger('hashchange', $F.nav.TRIGGER_SCOPE_PARAM);
        }
    };

    // Set the location (hash) to the specific path, remove the previos entry from history
    $F.nav.rewriteLocation = function rewriteLocation(path) {
        if(window.history && window.history.replaceState) {
            window.history.replaceState({}, null, path);

            // Start the hashchange event since the history modification doesn't trigger it automatically
            $(window).trigger('hashchange');
        } else {
            $F.nav.setLocation(path);
        }
    };

    // Force refresh the current view, including reload the script and the html
    $F.nav.refreshSubView = function refreshView(obj) {
        subView = null;
        nav.getScript({
            hash: location.hash
        });
    };

    // Reset the navigation engine
    nav.reset = function navInit() {
        nav.rel = '';
        nav.subView = null;
        nav.currentSubView = null;
        scriptStack = [];
        executionStack = [];
    };

    nav.getScript = function getScript(opt) {
        // take the previous hash, and iterate from the fullest path to the only first part of path.

        // check if we have reach the parent module, and stop fetching script immediately if true
        for (var i = scriptStack.length - 1; i >= 0; i--) {
            if (scriptStack[i].req === opt.hash) {
                // clear the stack until the parent module
                while (scriptStack.length > 0) {
                    var l = scriptStack[scriptStack.length - 1].req;

                    // if the stack string length is less than the current iteration hash string length, stop because the result will always no
                    if (l.length < opt.hash.length || l == opt.hash) {
                        break;
                    }

                    scriptStack.pop();
                }

                // run the afterLoad function of the parent, and process the HTML data
                var arg = {
                    fullParam: opt.query,
                    param: [],
                    namedParam: {}
                };

                if (opt.query !== "") {
                    arg.param = opt.query.split('/');
                }

                for (var j = 0; j < scriptStack.length; j++) {
                    if (typeof scriptStack[j].script.afterChildLoad === 'function') {
                        scriptStack[j].script.afterChildLoad(arg);
                    }
                }

                nav.getHTML(opt.query);
                return;
            }
        }

        // Check if the debug mode is activated
        var getDebug;
        if ($F.config.get('debug')) {
            getDebug = nav.getDebugScript;
        } else {
            getDebug = $.getScript;
        }

        try {
            var localDebug = getDebug($F.config.get('viewUri') + opt.hash + '.js', function () {
                // TODO: remove compatibility layer
                var view = $F.compat.subViewInit(nav.subView);

                if(typeof view.isPopup !== 'undefined' && view.isPopup) {
                    console.warn('Accessing popup as a non-popup view.');
                    alert('Accessing popup as a non-popup view.');
                    return;
                }

                // Clear the nav.subView
                nav.subView = null;
                var stack = {
                    script: view,
                    req: opt.hash
                };

                var required = '';
                if (typeof view.require != 'undefined') {
                    required = view.require;
                }

                executionStack.push(stack);

                // No more required script to fetch, start getting the HTML
                if (required === '') {
                    // reset scriptstack if we reach the main module
                    scriptStack = [];

                    nav.getHTML(opt.query, opt.firstPopup);
                    return;
                }

                nav.getScript({
                    hash: required,
                    query: opt.query,
                    parent: view,
                    firstPopup: opt.firstPopup
                });
            });

            if (localDebug != null && typeof localDebug.error === 'function') {
                localDebug.fail(function (e, x, ex) {
                    console.log(ex);
                    if (e.status == 404) {
                        $F.popup.show({
                            content: '<h2 style="font-size:20px;margin: 0 0 20px 0;text-align:center">404 Error: File not found</h2>' +
                                '<p style="width: 700px;margin:20px 0;line-height:18px;">You might be get here by entering wrong address in the address bar, clicking a link within application, or doing something that might trigger error. Please inform the developer if this problem persists and occured repeatedly.</p>' +
                                '<div style="text-align:center;">' +
                                '<a href="javascript:history.go(-1);$F.popup.close();" class="button">Return</a>' +
                                '<a href="#/bug-report?problem=404" class="button">Report Problem</a>' +
                                '<a href="." class="button">Return to dashboard.</a>' +
                                '</div>'
                        });
                    }
                });
            }
        } catch (e) {
            throw e;
        }
    };

    nav.getHTML = function getHTML(q, firstPopup) {
        if (executionStack.length == 0) {
            $F.nav.fixHashModifier();
            $F.initInput();
            return;
        }

        var stack = executionStack.pop();
        var view = stack.script;

        if (scriptStack.length > 0) {
            view.parent = scriptStack[scriptStack.length - 1].script;
        }

        scriptStack.push({
            script: view,
            req: stack.req
        });

        var req = stack.req;
        nav.currentSubView = view;

        var rel = nav.defaultRel;
        if (typeof view.rel !== 'undefined' && $('#' + view.rel).length > 0) {
             rel = view.rel;
        }

        var time = new Date().getTime();
        $('#' + rel).load($F.config.get('viewUri') + req + '.html?_=' + time, function () {
            // Get the default parameter
            var defaultArg = null;
            if (typeof view.defaultArguments !== 'undefined') {
                defaultArg = view.defaultArguments;
            }

            // Split the URL into parameter and other things, then trigger the afterLoad event
            var par = nav.splitParameter($F.nav.getCurrentHash().substr(2), defaultArg);

            view.afterLoad(par.arg);

            document.title = view.title;

            if (executionStack.length == 0) {
                if (typeof view.onDefaultChild == 'function') {
                    view.onDefaultChild(par.arg);
                }

                if (view.defaultChildView) {
                    history.replaceState(null, "", "#/" + view.defaultChildView);
                    $(window).trigger('hashchange');
                    return;
                }

                // When all the HTML has been received, get the first popup
                if (firstPopup) {
                    nav.openPopup(req, firstPopup, true);
                    return;
                }

                $F.nav.prepareHashModifier();
                nav.runHashChangeHook();

                $F.initInput();

                return;
            }

            nav.getHTML(q, firstPopup);
        });
    };

    nav.openPopup = function openPopup(fullFirstHash, secondHash, first) {
        first = first || false;
        var clearFirstLashHash = fullFirstHash.split('?');
        var firstHash = clearFirstLashHash[0];

        var split = nav.splitParameter(secondHash);
        var base = firstHash.split('.');
        $.getScript('view/' + base[0] +'/' + split.hash + '.js', function () {
            var popup = $F.compat.popupSubViewInit(nav.subView);

            $.get('view/' + base[0] + '/' + split.hash + '.html?_=' + new Date().getTime(), function (data) {
                navPopup = $F.popup.create({
                    content: data,
                    scrolling: 'no',
                    autoExpand: true,
                    afterClose: function () {
                        navPopup = null;
                        nav.closePopup();
                        $F.nav.fixHashModifier();
                    }
                });

                if(typeof popup == "object") {
                    if (!popup.isPopup) {
                        console.warn('Trying to access non-popup enabled view.');
                    }

                    // Create view accessor
                    popup.closePopup = nav.closePopup;
                    popup.parent = nav.currentSubView;

                    // Apply new default parameter
                    split = nav.splitParameter(secondHash, popup.defaultArguments);
                    popup.afterLoad(split.arg);

                    if (first) {
                        $F.nav.prepareHashModifier();
                        $F.initInput();
                        nav.runHashChangeHook();
                    }
                }
            }, 'html');
        });
    };

    nav.closePopup = function closePopup() {
        $F.nav.setLocation('#/' + firstLastHash);
        if (navPopup !== null) {
            navPopup.close();
            navPopup = null;
        }
    };

    nav.getDebugScript = function getDebugScript(url, callback) {
        var script = $('<script></script>').attr('src', url);
        $('head').append(script);
        callback();

        return null;
    };

    nav.splitParameter = function splitParameter(url, defaultArguments) {
        defaultArguments = defaultArguments || {};

        // Wipe out all the second hashes since they are not the part of parameter
        url = url.split('#')[0];

        var q = '',
            h = url,
            paramType = 0;

        // Split the question mark argument from the physical path
        if (url.search(/\?/) !== -1) {
            q = url.substr(url.search(/\?/) + 1);
            h = url.substr(0, url.search(/\?/));
            paramType = 2;
        } else if (url.search(/\./) !== -1) {
            // Split the dot argument from the physical path
            var search = url.search(/\./);
            q = url.substr(search + 1);
            h = url.substr(0, search);
            paramType = 1;
        }

        var arg = {
            fullParam: q,
            param: [],
            namedParam: {}
        };

        if (q !== "") {
            if (paramType == 1) { // 0 no param, 1 for dot based, 2 for question mark based
                arg.param = q.split('/');
            } else {
                arg.param = q.split('&');
                for (var i = 0; i < arg.param.length; i++) {
                    var argi = arg.param[i];
                    var search = argi.search('=');
                    var val = decodeURI(argi.substr(search + 1));
                    var key = decodeURI(argi.substr(0, search));
                    arg.namedParam[key] = val;
                }
            }
        }

        // Implant default arguments if necessary
        if (defaultArguments instanceof Array) {
            for (var i = arg.param.length; i < defaultArguments.length; i++) {
                arg.param.push(defaultArguments[i]);
            }
        } else {
            for (var data in defaultArguments) {
                if (typeof arg.namedParam[data] !== 'undefined') {
                    continue;
                }

                arg.namedParam[data] = defaultArguments[data];
            }
        }

        return {
            query: q,
            hash: h,
            paramType: paramType,
            arg: arg
        };
    };

    nav.runHashChangeHook = function () {
        for (var i = 0; i < hashChangeHooks.length; i++) {
            hashChangeHooks[i]();
        }
    };

    /******** Formalhaut Engine Hook *********/

    // new way to load view script
    $F.loadView = function loadView(obj) {
        nav.subView = obj;
    };

    $F.nav.fixHashModifier = function fixHashModifier(selector) {
        selector = selector || null;

        $('a[data-orig-href^="##"]', selector).each(function (i, el) {
            $(el).attr('href', '#/' + firstLastHash + '#' + $(el).attr('data-orig-href').substr(2));
        });

        $('a[data-orig-href^="#."]', selector).each(function (i, el) {
            $(el).attr('href', '#/' + firstLastHashNoParam + '.' + $(el).attr('data-orig-href').substr(2));
        });
    };

    $F.nav.prepareHashModifier = function prepareHashModifier(selector) {
        selector = selector || null;

        // Search the link that use the modifier hash
        $('a[href^="##"]', selector).each(function (i, el) {
            $(el).attr('data-orig-href', $(el).attr('href'));
        });

        // Search and proceed argument hash shorthand
        $('a[href^="#."]', selector).each(function (i, el) {
            $(el).attr('data-orig-href', $(el).attr('href'));
        });

        $F.nav.fixHashModifier(selector);
    };

    $F.nav.addHashChangeHook = function (hook) {
        hashChangeHooks.push(hook);
    };

    // Inialization function
    function init() {
        $(window).on('hashchange', function (event, triggerScope) {
            // Proceed second hash shorthand
            if (window.location.hash.substr(0, 2) === '##') {
                window.history.replaceState(null, "", '#/' + firstLastHash + '#' + window.location.hash.substr(2));
            }

            // Proceed argument hash shorthand
            if (window.location.hash.substr(0, 2) === '#.') {
                window.history.replaceState(null, "", '#/' + firstLastHash + '.' + window.location.hash.substr(2));
            }

            // Proceed primary hash
            if (window.location.hash.substr(0, 2) === '#/') {
                var hash = window.location.hash.substr(2);
                var h2 = '';
                var first = '';

                // Default for h is the first hash itself
                var h = hash;

                // get second hash
                if (h.search(/#/) != -1) {
                    h2 = hash.substr(h.search(/#/) + 1);
                    h = hash.substr(0, h.search(/#/));
                }

                first = h;
                firstLastHash = h;

                var proc = nav.splitParameter(h);

                // just the query is changed OR when force trigger flag is set
                if ((firstLastHashNoParam == proc.hash && lastParam != proc.query) || triggerScope === $F.nav.TRIGGER_SCOPE_PARAM) {
                    var current = nav.currentSubView;

                    // Rewrite the proc variable
                    proc = nav.splitParameter(h, current.defaultArguments);

                    for (;;) {
                        if (current.afterParamLoad) {
                            current.afterParamLoad(proc.arg);
                        }
                        if(typeof current.parent == 'undefined') {
                            break;
                        }
                        current = current.parent;
                    }

                    lastParam = proc.query;
                    firstLastHash = first;

                    $F.nav.prepareHashModifier();
                    return;
                }

                // check if second hash changed
                var firstPopup = null;
                if (secondLastHash != h2) {
                    if (!isFirstLoad) {
                        // show the popup
                        if (h2 != '') {
                            nav.openPopup(firstLastHash, h2);
                        } else {
                            nav.closePopup();
                        }

                        secondLastHash = h2;
                    } else {
                        firstPopup = h2;
                    }
                }

                isFirstLoad = false;

                // Cut the physical path data to the array
                var pathArray = proc.hash.split(/\//g);

                // if we go to the ancestor path, invalidate last path data and stack
                if(firstLastHash.indexOf(proc.hash) == 0) {
                    executionStack = [];
                }

                nav.getScript({
                    hashList: pathArray,
                    hash: proc.hash,
                    query: proc.query,
                    firstPopup: firstPopup
                });

                firstLastHashNoParam = proc.hash;
                firstLastHash = first;
                lastParam = proc.query;
            }
        });
    }
})(jQuery, $F);
