/** Core Formalhaut File **/
var $F = ($F) ? $F : null;

(function ($) {
    "use strict";

    var ajaxRequest = 0;
    var processedRequest = 0;
    var barTimeout = 20;
    var barClearTimeout;
    var maxAnimation = 20;
    var curAnimation = 0;
    var curProcessedRequest = 0;
    var showLoadBar = false;

    checkF();

    $(window).ready(function() {
        initBar();
    });

    function checkF() {
        if (!$ && $.fn.jQuery.split('.')[0] != '1' && parseInt($.fn.jQuery.split('.')[1]) < 10) {
            console.error('Formalhaut JS engine needs jQuery 1.10');
        }

        if ($F !== null) {
            return;
        } else {
            $F = initF();
        }
    }

    function initF() {
        var build = function () {

        };

        // Move global window to $F.window. In short, no DOM accessing global variable allowed.
        build.window = window;

        build.ajax = function (opt) {
            opt.progress = opt.progress || true;
            var ajaxType = opt.type || 'GET';
            var popup = null;

            ++ajaxRequest;
            if (!showLoadBar) {
                loadBar();
            }

            // Set default behavior for POST
            // For GET, the default behavior is do nothing
            if (opt.progress === true) {
                if (ajaxType.toLowerCase() === 'post') {
                    popup = $F.popup.create({
                        content: '<p style="font-size: 14px">Processing request. Please wait until this message disappear.',
                        modal: true
                    });
                }
            } else if (typeof opt.progress === 'function') {
                opt.progress();
            }

            return $.ajax({
                url: opt.url,
                data: opt.data || {},
                type: ajaxType,
                contentType: typeof(opt.contentType) != 'undefined' ? opt.contentType : 'application/json',
                processData: typeof(opt.processData) != 'undefined' ? opt.processData : true,
                dataType: opt.dataType || 'json',
                success: function (data, status) {
                    // Support for legacy code without status
                    if (!data.status) {
                        var oldData = data;
                        data = {};
                        data.status = '200';
                        data.data = oldData;

                        console.warn('Using the old service payload style. Please move to the new service style');
                    }

                    opt.success(data.data, data.status);
                },
                complete: function () {
                    ++processedRequest;
                    if (opt.complete) {
                        opt.complete.apply(this, arguments);
                    }

                    // Don't forget to close loading popup
                    if (popup != null) {
                        popup.close();
                    }

                    $F.nav.prepareHashModifier();
                },
                error: function (data) {
                    if (data.status === 401) {
                        location.href = $F.config.get('loginUri');
                    }
                    $F.logError('Ajax error');

                    var errorPopup = $F.popup.create({
                        content: '<p style="font-size: 14px">There is an error somewhere in the service. Please inform the developer.</p>'
                    });
                }
            });
        };

        build.get = function (url, onComplete) {
            return $F.ajax({
                url: url,
                type: 'GET',
                complete: onComplete
            });
        };

        build.post = function (url, data, onComplete) {
            return $F.ajax({
                url: url,
                type: 'POST',
                data: data,
                contentType: 'application/json',
                complete: onComplete
            });
        };

        /** Shorthand of $F.ajax with URL that have been prepended with serviceUri **/
        build.service = function (data) {
            data.url = $F.config.get('serviceUri') + data.url;
            var ret = build.ajax(data);
            return ret;
        };

        build.logError = function (err) {
            console.error(err);
        };

        build.setConfig = function (configData) {
            config = configData;
        };

        build.hook = function (func) {

        };

        build.help = function () {
            var arr = [];
            for (var i in build) {
                if (typeof build[i] === 'function') {
                    arr.push(i + '()');
                }
            }

            console.info(arr.join(', '));
        };

        return build;
    }

    function sendToLogin(message) {
        location.href = message;
    }

    function initBar() {
        $('body').append($('<div id="loading-bar"></div>').css({
            background: 'rgba(255, 255, 0, 0.8)',
            display: 'none',
            height: '2px',
            position: 'fixed',
            top: '0',
            left: '-2px',
            zIndex: '11999',
            boxShadow: '2px 2px 2px #000'
        }));
    }

    function loadBar() {
        showLoadBar = true;
        var w = $(window).width();

        if (curProcessedRequest !== processedRequest) {
            curAnimation = 0;
            curProcessedRequest = processedRequest;
        }

        if (curAnimation <= maxAnimation) {
            ++curAnimation;
        }

        if (processedRequest >= ajaxRequest) {
            barTimeout--;

            // Reset the timeout
            if (barTimeout == 0) {
                barTimeout = 20;
                processedRequest = 0;
                ajaxRequest = 0;
                barClearTimeout = 20;
                clearBar();
                return;
            }
        } else {
            w = ((processedRequest / ajaxRequest) * w) + ((curAnimation / maxAnimation) * ((1 / ajaxRequest) * w * (3/5))) + 2;
            $('#loading-bar').show().width(w);
            barTimeout = 10;
        }

        setTimeout(loadBar, 50);
    }

    function clearBar() {
        var w = $(window).width();
        $('#loading-bar').width(w);

        --barClearTimeout;

        if(barClearTimeout === 0) {
            $('#loading-bar').fadeOut();
            showLoadBar = false;
            return;
        }

        setTimeout(clearBar, 50);
    }
})(jQuery);/** Configuration Processing for Formalhaut **/
(function ($, $F) {
    "use strict";
    
    var hook = [];
    var localConfig = {};
    
    $F.config = {};
    
    $F.config.load = function (config) {
        localConfig = config;
        for (var i in hook) {
            hook[i]();
        }
    };
    
    $F.config.get = function (key) {
        return localConfig[key] ? localConfig[key] : null;
    };
    
    $F.config.hook = function (fn) {
        if (typeof fn === 'function') {
            hook.push(fn);
        }
    };
})(jQuery, $F);
/** This is a compatibility layer for Formalhaut engine.
  * This file is only temporary and might be removed when the system isn't needed anymore
  **/
var BM = {};
(function ($, $F) {
    "use strict";
    
    $F.compat = {};
    
    $F.compat.subViewInit = function (navSubView) {
        if (navSubView != null) {
            return navSubView;
        }
        
        // Access global var of window.subView
        if (window.subView) {
            var sv = window.subView;
            
            // Clean up the global variable
            delete window.subView;
            sv.afterLoad = sv.onLoaded;
            
            console.warn('Using deprecated var subView. Please change to $F.loadView.');
            alert('Using deprecated var subView. Please change to $F.loadView.');
            
            return sv;
        }
    };
    
    $F.compat.popupSubViewInit = function (navSubView) {
        if (navSubView != null) {
            return navSubView;
        }
        
        // Access global var of window.subView
        if (window.popupSubView) {
            var sv = window.popupSubView;
            
            // Clean up the global variable
            delete window.popupSubView;
            sv.afterLoad = sv.onLoaded;
            
            console.warn('Using deprecated var popupSubView. Please use $F.loadView with "popup: true".');
            alert('Using deprecated var popupSubView. Please use $F.loadView with "popup: true".');
            
            return sv;
        }
    };
    
    $F.config.hook(function() {
        BM.ajax = function (data) {
            $F.ajax(data);
        };
        
        BM.serviceUri = $F.config.get('serviceUri');
    });
})(jQuery, $F);
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
// Annotation Module for Formalhaut
(function ($, $F) {
    $F.nav.addHashChangeHook(function () {
        /*$('[title]:not([data-f-title])').each(function () {
            $(this).attr('data-f-title', $(this).attr('title'));
        });*/

        $('[data-f-title]').off('mouseenter.f-annotation').off('mouseleave.f-annotation');
        $('[data-f-title]').on('mouseenter.f-annotation', function () {
            var box = $('<div class="f-annotation-box"></div>')
                .css('background', '#fff')
                .css('border', '1px solid #333')
                .css('padding', '5px').text($(this).attr('data-f-title'))
                .css('position', 'absolute')
                .css('left', $(this).offset().left + 'px')
                .css('top', $(this).offset().top + 'px')
                .css('z-index', '40000')
                .css('max-width', '300px');
            $('body').append(box);
        }).on('mouseleave.f-annotation', function () {
            $('.f-annotation-box').remove();
        });
    });

})(jQuery, $F);
// Error Handling Module for Formalhaut

(function () {
    window.onerror = function (msg, url, line) {
        if (typeof $F.service == 'function') {
            $F.service({
                url: 'error/reporting',
                type: 'post',
                data: JSON.stringify({
                    error: msg,
                    url: url,
                    line: line
                }),
                success: function (data) {
                    $F.popup.show({
                        content: 'There is an error within the application. The error has been informed to the developer and will be fixed immediately.'
                    });
                }
            });
        }
    };
})();/** Formatting Toolbelt for Formalhaut **/
(function ($, $F) {
    "use strict";

    $F.format = {};

    $F.format.longDate = function (date, options) {
        if (typeof date != 'string' || /^\d{4}-\d\d-\d\d$/.test(date) == false) {
            if (options && options.bypass) {
                return date;
            }
            return 'Invalid format (yyyy-mm-dd)';
        }

        var month = $F.config.get('months');
        var d = date.split(/-/);
        if(d[1][0]=='0'){
            d[1] = parseInt(d[1][1]);
        } else {
            d[1] = parseInt(d[1]);
        }

        if(d[2][0]=='0'){
            d[2] = d[2][1];
        }
        return d[2] + ' ' + month[d[1]] + ' ' + d[0];
    };

    $F.format.shortDate = function (date, options) {
        if (typeof date != 'string' || /^\d{4}-\d\d-\d\d$/.test(date) == false) {
            if (options && options.bypass) {
                return date;
            }
            return 'Invalid format (yyyy-mm-dd)';
        }

        var month = $F.config.get('shortMonths');
        var d = date.split(/-/);
        if (d[1][0] == '0'){
            d[1] = parseInt(d[1][1]);
        } else {
            d[1] = parseInt(d[1]);
        }

        if(d[2][0] == '0'){
            d[2] = d[2][1];
        }

        return d[2] + ' ' + month[d[1]] + ' ' + d[0];
    };

    $F.format.date = function (date, options) {
        if (typeof date != 'string' || /^\d{4}-\d\d-\d\d$/.test(date) == false) {
            if (options && options.bypass) {
                return date;
            }
            return 'Invalid format (yyyy-mm-dd)';
        }

        var d = date.split(/-/);
        return d[2] + '-' + d[1] + '-' + d[0];
    };

    $F.format.period = function (period) {
        if (/\d{4}-\d-\d/.test(period) === false) {
            return period || '';
        }

        var p = period.split(/-/);
        p[0] = p[0] + '/' + (parseInt(p[0]) + 1).toString();

        if (p[1] == '1') {
            p[1] = 'Odd';
        } else if (p[1] == '2') {
            p[1] = 'Even';
        } else if (p[1] == '3') {
            p[1] = 'Compact';
        }

        if (p[2] == '0') {
            return p[0] + ' - ' + p[1];
        }

        return p[0] + ' - ' + p[1] + ' - ' + p[2];
    };

    $F.format.number = function (number) {
        return $F.format.customNumber(number, '.', ',', ',', '.', false);
    };

    $F.format.cleanNumber = function (number) {
        return $F.format.customNumber(number, '.', ',', ',', '.', true);
    };

    $F.format.customNumber = function (number, commaFrom, thousandFrom, commaTo, thousandTo, trimTrailingZero) {
        commaFrom = commaFrom || '.';
        thousandFrom = thousandFrom || ',';
        commaTo = commaTo || commaFrom;
        thousandTo = thousandTo || thousandFrom;
        trimTrailingZero = trimTrailingZero || false;

        if (number == null) {
            return number;
        }

        var num = number.toString();

        if (new RegExp("^-?[0-9" + thousandFrom + "]*(" + commaFrom + "[0-9]*)?$").test(num)) {
            num = num.replace(thousandFrom, '').split(commaFrom);
            var s2 = '', dot = '';

            if (num[0].length !== 0) {
                while (num[0].length > 0){
                    if (num[0] == '-') {
                        s2 = '-' + s2;
                        break;
                    }

                    s2 = num[0].substr((num[0].length - 3 >= 0 ? num[0].length - 3 : 0), 3) + dot + s2;
                    dot = thousandTo;
                    num[0] = num[0].substr(0, num[0].length - 3);
                }
            } else {
                s2 = '0';
            }

            if (num.length > 1) {
                if (trimTrailingZero) {
                    num[1] = num[1].replace(/0+$/, '');
                }

                if(num[1] != '') {
                    s2 += commaTo + num[1];
                }
            }

            num = s2;
        }

        return num;
    };

    $F.format.shortTime = function (time) {
        if (!time) {
            return '';
        }

        var t = time.split(':');
        return t[0] + ':' + t[1];
    };

    $F.format.longTime = function (time) {
        if (!time) {
            return '';
        }
        var t = time.split(':');
        return t[0] + ':' + t[1] + ':' + t[2].substr(0,2);
    };

    $F.format.dateTime = function (input, formatDateCallback, formatTimeCallback) {
        formatDateCallback = formatDateCallback || 'Date';
        formatTimeCallback = formatTimeCallback || 'ShortTime';

        var t = input.split(' ');
        var call = formatDateCallback;
        var date = $F.format[call](t[0]);

        var time = t[1];
        if(formatTimeCallback != '') {
            var callTime = formatTimeCallback;
            time = $F.format[callTime](time);
        }

        return date + ' ' + time;
    };
})(jQuery, $F);
/** Input Formatting Toolbelt for Formalhaut **/
(function ($, $F) {
    "use strict";

    $F.inputFormat = {};

    $F.inputFormat.decimal = function (element) {
        $(element).not('.f-input-number').addClass('f-input-number').on('keypress.inputnumber', function (e) {
            if (e.which < 32) {
                return true;
            }

            var dpr = $(this).val();

            processDecimal(this, e.which, false);

            e.preventDefault();

            function processDecimal(el, key, bs) {
                var start, end;
                start = el.selectionStart;
                end = el.selectionEnd;

                var vl = el.value;
                var s = '';
                dpr = $(el).val();

                if (!bs) {
                    s += vl.substr(0, start) + String.fromCharCode(key) + vl.substr(end);
                } else {
                    if (start != end) {
                        s += vl.substr(0, start) + vl.substr(end);
                    } else {
                        s += vl.substr(0, start - 1) + vl.substr(end);
                    }
                }

                if (/^-?([1-9][0-9.]*|0?)(,[0-9]*)?$/.test(s)) {
                    s = number_format(s);
                    dpr = s;
                    el.value = s;
                    if (el.value.length == 1) {
                        el.setSelectionRange(1, 1);
                    } else {
                        if (bs) {
                            el.setSelectionRange(start - 1, start - 1);
                        } else {
                            el.setSelectionRange(start + Math.abs(s.length - vl.length), start + Math.abs(s.length - vl.length));
                        }
                    }
                }
            }

            function number_format(num) {
                num = num.toString();
                if(/^-?[0-9.]*(,[0-9]*)?$/.test(num)) {
                    num=num.replace(/\./g,'').split(',');
                    var s2='',dot='';
                    while(num[0].length>0){
                        if(num[0]=='-') {
                            s2='-'+s2;
                            break;
                        }
                        s2=num[0].substr((num[0].length-3>=0 ? num[0].length-3 : 0), 3)+dot+s2;
                        dot='.';
                        num[0]=num[0].substr(0,num[0].length-3);
                    }
                    if(num.length>1){s2+=','+num[1];}
                    num=s2;
                }

                return num;
            }
        });
    };

    $F.initInput = function () {
        $('.input-time').not('.f-input-time').addClass('f-input-time').on('keyup.inputtime', function (e) {
            if (e.which == 8 || e.which == 46) {
                return;
            }

            var val = $(this).val();
            if (val.length == 3) {
                $(this).val(val.substr(0, 2) + ':' + val.substr(2, 1));
            }
        });
    };

})(jQuery, $F);


/** Pagination system for Formalhaut **/
(function ($, $F) {
    "use strict";

    var defaultPerPage = 20;
    var defaultDataSelector = '.datatable';
    var before = 'Page: ';
    var defaultNextPrevCount = 3;
    var randomClassAppender = (function() {
        var length = 4;
        var rand = 'abcdefghijklmnopqrstuvwxyz';
        var className = '';

        for(var i = 0; i < length; i++) {
            var c = Math.random();
            var r = rand[Math.floor(c * rand.length)];
            className += r;
        }

        return className;
    })();

    $F.pagination = function (option) {
        option = option || {};
        option.before = option.before || before;
        option.dataCount = parseInt(option.dataCount || 1);
        option.perPage = parseInt(option.perPage || defaultPerPage);
        option.url = option.url || null;
        option.nextPrevCount = parseInt(option.nextPrevCount || defaultNextPrevCount);
        option.currentPage = parseInt(option.currentPage || 1);

        var element;
        if (option.element) {
            element = $(option.element);
        } else {
            if ($('.page-' + randomClassAppender).length) {
                element = $('.page-' + randomClassAppender);
                element.empty();
            } else {
                // Attempt to auto generate pagination after a table
                element = $('<div class="pagination"></div>').addClass('page-' + randomClassAppender);

                var defaultRel = $F.config.get('defaultRel');

                // Get all table in the default content element
                var tab = $('#' + defaultRel + ' table');
                if (tab.is(defaultDataSelector)) {
                    tab = tab.filter(defaultDataSelector);
                } else {
                    // Only take the first table found
                    tab = tab.eq(0);
                }

                if(tab.length === 0) {
                    var alertMsg = [];
                    alertMsg.push('Not found any table for pagination.');
                    alertMsg.push('Ensure you have at least one table or a table with "datatable" class name.');
                    alertMsg.push('Alternatively, send the element you want to populate with pagination in "element" property.');
                    console.error(alertMsg.join('\n'));
                    return;
                }

                tab.after(element);
            }
        }

        // If the data is sent instead, count the data
        if (option.data && $.isArray(option.data)) {
            option.dataCount = option.data.length;
        }

        if (option.url === null) {
            var split = $F.nav.getLastParam().split(/\//g);
            if (split.length === 1 && split[0] === '') {
                option.url = "#.{page}";
            } else {
                var pop = split[split.length - 1];
                if(isNaN(pop)) {
                    split.push('{page}');
                } else {
                    split.pop();
                    split.push('{page}');
                }

                option.url = '#.' + split.join('/');
            }
        }

        var lastPage = Math.ceil(option.dataCount / option.perPage);

        element.html('');
        element.append($('<span class="pagination">' + option.before + '</span>'));
        element.append($('<a></a>').text('<<').attr('href', replacePage(option.url, 1)));

        if (option.currentPage > 1) {
            element.append($('<a class="pageprev"></a>').text('<').attr('href', replacePage(option.url, option.currentPage - 1)));
        }

        for (var i = option.currentPage - option.nextPrevCount; i <= option.currentPage + option.nextPrevCount; i++) {
            if (i < 1 || i > lastPage) {
                continue;
            }
            
            element.append($('<a></a>').text(i).attr('href', replacePage(option.url, i)));
        }

        if (option.currentPage < lastPage) {
            element.append($('<a class="pagenext"></a>').text('>').attr('href', replacePage(option.url, option.currentPage + 1)));
        }

        element.append($('<a></a>').text('>>').attr('href', replacePage(option.url, lastPage)));
        $F.nav.prepareHashModifier(element);
    };
    
    $F.pagination.getClass = function () {
        return randomClassAppender;
    };
    
    $F.pagination.getElement = function () {
        return $('.page-' + randomClassAppender);
    };

    function replacePage(base, num) {
        return base.replace('{page}', num);
    }
})(jQuery, $F);
/** Popup module for Formalhaut Engine * */
(function($, $F) {
    "use strict";

    var activePopup = null,
        usePlaceholder = false,
        placeholderClone,
        objOption,
        countPopup = 0,
        popupStack = {};
        
    var config;

    // Load the configuration data
    $F.config.hook(function () {
        config = $F.config.get('popup');
    });

    // Create popup prototype
    function PopupObject(obj, id) {
        this.wrap = null;
        this.id = id || Math.round(Math.random() * 65536);

        obj.content = obj.content || '';
        obj.width = obj.width || 'auto';
        obj.height = obj.height || 'auto';
        obj.modal = obj.modal || false;
        obj.autoExpand = obj.autoExpand || false;

        objOption = obj;

        var w = $(window).width();
        var h = $(window).height();
        var self = this;

        $('body').css({
            position : 'relative',
            overflow : 'hidden'
        });

        var divBorder = $('<div class="popup-border"></div>').css({
            width : obj.width
        });

        divBorder.click(function (e) {
            e.stopPropagation();
        });

        var bg = $('<div class="popup-background"></div>');

        var divContent;
        if (obj.content instanceof $) {
            usePlaceholder = true;
            placeholderClone = obj.content.clone();

            obj.content.before('<div id="popup-placeholder" style="display:none"></div>');
            obj.content.show();
            divContent = $('<div class="popup-content"></div>').append(obj.content);
        } else {
            divContent = $('<div class="popup-content"></div>').html(obj.content);
        }

        this.wrap = $('<div class="popup-full-wrap popup"></div>').css({
            width: w + 'px',
            height: h + 'px'
        }).click(function (e) {
            e.stopPropagation();
        });

        var innerWrap = $('<div class="popup-inner-wrap"></div>').css({
            width: w + 'px',
            height: h + 'px'
        });

        var ndInnerWrap = $('<div class="popup-second-inner-wrap"></div>');

        // add event onclick that will remove the popup if it's not a modal popup
        var closeButton = null;
        if (!obj.modal) {
            closeButton = $('<div class="popup-close-button"></div>').html('X').click(function() {
                self.close({
                    afterClose : obj.afterClose
                });
            });

            innerWrap.click(function () {
                self.close({
                    afterClose : obj.afterClose
                });
            });

            divBorder.append(closeButton);
        }

        divBorder.append(divContent);
        ndInnerWrap.append(divBorder);
        innerWrap.append(ndInnerWrap);
        this.wrap.append(bg).append(innerWrap);

        $('body').append(this.wrap);

        this.wrap.animate({
            opacity : 1
        }, 250);

        // Reposition the popup
        var scopeWrap = this.wrap;
        
        // Insert configuration class
        if (config) {
            if (config.popupClass) {
                this.wrap.addClass(config.popupClass);
            }
            
            if (config.borderClass) {
                divBorder.addClass(config.borderClass);
            }
            
            if (config.backgroundClass) {
                bg.addClass(config.backgroundClass);
            }
            
            if (config.closeButtonClass && closeButton) {
                closeButton.addclass(config.closeButtonClass);
            }
            
            if (config.innerWrapClass && innerWrapClass) {
                innerWrap.addClass(config.innerWrapClass);
            }
        }

        resizePopup({}, this.wrap);
        $(window).on('resize.popup', function () {
            resizePopup({}, scopeWrap);
        });

        // Mutation observer (only available in modern browser and IE11+)
        var observer = new MutationObserver(function (mutations) {
            resizePopup({}, scopeWrap);
        });

        // Bind the mutation observer
        if (obj.autoExpand) {
            observer.observe(divBorder[0], {
                childList: true,
                subtree: true
            });
        }

        // Close popup if it's have the same identifier in the stack
        if (popupStack[id]) {
            popupStack[id].close();
        }

        // Push to stack again
        popupStack[id] = this;
    }

    PopupObject.prototype.close = function (param) {
        param = param || {};

        // This part need more test before released to public, remain commented for awhile
//        if ($('form', this.wrap).length !== 0) {
//            if (!confirm('Do you really want to leave the form?')) {
//                return;
//            }
//        }

        if (param.afterClose) {
            param.afterClose();
        }

        this.wrap.animate({
            opacity : '0'
        }, 250, function() {
            $(this).hide();
            $(this).remove();
        });

        delete popupStack[this.id];

        if (Object.keys(popupStack).length == 0) {
            $('body').css({
                overflow : ''
            });
        }
    };

    $F.popup = {};

    $F.popup.create = function (obj) {
        ++countPopup;

        var p = new PopupObject(obj, countPopup);
        return p;
    };

    // For the static popup
    $F.popup.show = function (obj) {
        if (activePopup) {
            $F.popup.close();
            activePopup = null;
        }

        activePopup = $F.popup.create(obj);
    };

    $F.popup.close = function (param) {
        param = param || {};

        if (activePopup != null) {
            activePopup.close(param);
            activePopup = null;
        }
    };

    $F.popup.resize = function (param) {
        param = param || {};
        param.width = param.width || null;
        resizePopup(param, activePopup.wrap);
    };

    function resizePopup(param, wrap) {
        param = param || {};
        param.width = param.width || null;

        var w = $(window).width();
        var h = $(window).height();

        wrap.css({
            width : w + 'px',
            height : h + 'px'
        });

        $('.popupinnerwrap', wrap).css({
            width: w + 'px',
            height: h + 'px'
        });

        var divBorder = $('.popup-border', wrap);
        var divNdInnerWrap = $('.popup-second-inner-wrap', wrap);

        divBorder.css({
            width : objOption.width
        });

        divNdInnerWrap.css({
            height: (divBorder.height() + 30) + 'px'
        })

        if (param.width != null) {
            divBorder.css('width', param.width);
        }

        var wd = divBorder.width();
        var wh = divBorder.height();

        divBorder.css({
            left: (w / 2 - wd / 2 - 15) + 'px',
            height: 'auto'
        });

        if (wh < w) {
            divBorder.css({
                top: '30px'
            });
        }
    }
})(jQuery, $F);
/** Data serialization for Formalhaut **/
(function ($, $F) {
    "use strict";

    $F.serialize = function (selector, returnStringify) {
        returnStringify = (returnStringify == null) ? false : returnStringify;

        var json = {};
        jQuery.map($(selector).serializeArray(), function (n, i) {
            var cleanName = n.name.replace(/\[.*\]$/, '');

            if (typeof json[cleanName] == 'undefined') {
                if (/\[\]/.test(n.name)) {
                    json[cleanName] = [n.value];
                } else if (/\[.*?\]/.test(n.name)) {
                    json[cleanName] = {};

                    iterateObject(json[cleanName], n.name, n.value)
                } else {
                    json[cleanName] = n.value;
                }
            } else {
                if (typeof json[cleanName] == 'object') {
                    if (json[cleanName] instanceof Array) {
                        json[cleanName].push(n.value);
                    } else {
                        iterateObject(json[cleanName], n.name, n.value);
                    }
                } else {
                    var temp = json[cleanName];
                    json[cleanName] = [temp, n.value];
                }
            }
        });

        if (returnStringify) {
            return JSON.stringify(json);
        }

        return json;
    };

    function iterateObject(ref, name, value) {
        var reg = /\[(.*?)\]/g;
        var key;
        var keyBefore = null;
        var refBefore = null;
        while (key = reg.exec(name)) {
            if (typeof ref[key[1]] == 'undefined') {
                ref[key[1]] = {}
            }

            refBefore = ref;
            keyBefore = key[1];

            ref = ref[key[1]];
        }

        refBefore[keyBefore] = value;
    }

})(jQuery, $F);
/** Tabbed view system for Formalhaut **/
(function ($, $F) {
    "use strict";

    var defaultElementSelector = '.scrollablenav';
    var randomClassAppender = (function() {
        var length = 4;
        var rand = 'abcdefghijklmnopqrstuvwxyz';
        var className = '';

        for(var i = 0; i < length; i++) {
            var c = Math.random();
            var r = rand[Math.floor(c * rand.length)];
            className += r;
        }

        return className;
    })();

    $F.tabview = function (option) {
        option = option || {};

        var element;
        if (option.element) {
            element = $(option.element);
        } else {
            element = $(defaultElementSelector);
        }

        var wTotal = 0;
        $('li', element).each(function () {
            wTotal += $(this).width();
        });

        $(element).css('overflow', 'hidden');
        $('ul', element).width(wTotal);

        var wElement = $(element).width();
        var deltaW = wTotal + parseInt($('ul', element).css('padding-left')) + parseInt($('ul', element).css('padding-right')) - wElement;
        if (deltaW < 0) {
            deltaW = 0;
        }

        var elX = $(element).position().left;
        $(element).mousemove(function (e) {
            var x = ((e.clientX - elX) / wElement) * deltaW;
            $(element).scrollLeft(x);
        });
    }
})(jQuery, $F);
/** Tutorial Processing Engine for Formalhaut **/
(function ($, $F) {
    var tutorialStep = -1,
        tutorialScript = null;

    $F.tutorial = {};

    $F.tutorial.loadTutorial = function (script) {
        $.ajax({
            url: $F.getConfig('tutorialDirectory') + script,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                tutorialScript = data;
                $F.tutorial.processTutorial();
            }
        });
    };

    $F.tutorial.processTutorial = function () {
        if (tutorialScript == null) {
            return;
        }

        tutorialStep++;

        // destroy anything if we reach the end
        if (tutorialScript[tutorialStep] === undefined) {
            $('#tutorialenginelayer').remove();
            $('body').css('overflow', 'auto');
            tutorialScript = null;
            tutorialStep = -1;
            return;
        }

        $F.tutorial.tutorial(tutorialScript[tutorialStep]);

    };

    $F.tutorial.tutorial = function (act) {
        // unbind and rebind to render the tutorial layer on window resize
        var stateAct = act;
        $(window).off('resize.rendertutorial').on('resize.rendertutorial', function(){
            $F.tutorial.tutorial(stateAct);
        });

        act.disableCenter = act.disableCenter || true;

        $('#tutorialenginelayer').remove();

        // disable the global scrolling
        $('body').css('overflow', 'hidden').append('<div id="tutorialenginelayer" style="z-index: 9999;"></div>');

        switch (act.type) {
        case 'show':
        default:
            // define the box
            var north = $('<div style="width: 100%; position: absolute; background: rgba(0, 0, 0, 0.5); top: 0px; z-index: 2000;"></div>');
            var south = $('<div style="width: 100%; position: absolute; background: rgba(0, 0, 0, 0.5); height: 100%; z-index: 2000;"></div>');
            var west = $('<div style="position: absolute; background: rgba(0, 0, 0, 0.5); z-index: 2000;"></div>');
            var east = $('<div style="width: 100%; position: absolute; background: rgba(0, 0, 0, 0.5); z-index: 2000;"></div>');

            if(act.focusNode != undefined) {
                act.x = $(act.focusNode).eq(0).offset().left;
                act.y = $(act.focusNode).eq(0).offset().top;
                act.w = $(act.focusNode).eq(0).innerWidth();
                act.h = $(act.focusNode).eq(0).innerHeight();
            }

            if(act.padding) {
                act.x -= act.padding;
                act.y -= act.padding;
                act.w += act.padding * 2;
                act.h += act.padding * 2;
            }

            var wd = { h: $('html').innerHeight(), w: $('html').innerWidth(), y: $(document).scrollTop() };

            // auto scroll if out of viewport
            if (act.y + act.h < wd.y || act.y < wd.y) {
                $('html,body').stop().animate({ scrollTop: act.y - 50 }, 300);
            } else if (act.y + act.h > wd.h + wd.y || act.y > wd.h + wd.y) {
                $('html,body').stop().animate({ scrollTop: act.y - 50 }, 300);
            }

            north.css({ height: act.y + 'px' });
            south.css({ top: (act.y + act.h) + 'px' });
            west.css({ top: act.y + 'px', width: act.x + 'px', height: act.h + 'px' });
            east.css({ top: act.y + 'px', height: act.h + 'px', left: (act.x + act.w) + 'px' });

            $('#tutorialenginelayer').append(north).append(south).append(west).append(east);

            // disable inner if needed
            if (act.disableCenter) {
                var center = $('<div style="position: absolute; z-index: 500;"></div>');
                center.css({width: act.w, height: act.h, top: act.y, left: act.x});
                $('#tutorialenginelayer').append(center);
            }

            // send in the message box
            var msgbox = $('<div style="border: 3px solid #999;position:absolute; z-index: 2005; width: 300px; height: 100px; background: #fff; padding: 5px;font-size:11px;"></div>');

            var msgw = act.messageW || 300;
            var msgh = act.messageH || 100;
            var msgx = act.x + act.w + 20;
            var msgy = act.y;

            if (act.x + act.w + msgw + 20 > wd.w) {
                msgx = act.x - msgw - 20;
            }

            msgbox.css({top: msgy + 'px', left: msgx + 'px', width: msgw + 'px', height: msgh + 'px' });
            msgbox.html(act.message);
            $('#tutorialenginelayer').append(msgbox);
        }
    };

    $F.tutorial.clearTutorialLayer = function () {
        $('#tutorialenginelayer').remove();
        $('body').css('overflow', 'auto');

        // kill the render event on resize
        $(window).off('resize.rendertutorial');
    };
})(jQuery, $F);
/** Utility Functions Engine for Formalhaut **/
(function ($, $F) {
    $F.util = {};

    $F.util.buildUrl = function (base, keyval, unescapeValue) {
        var queryString = '';
        var delimiter = '';

        unescapeValue = unescapeValue || false;

        for (var i in keyval) {
            queryString += delimiter;
            queryString += encodeURIComponent(i);

            if (unescapeValue) {
                queryString += '=' + keyval[i];
            } else {
                queryString += '=' + encodeURIComponent(keyval[i]);
            }

            delimiter = '&';
        }

        return (queryString !== '') ? (base + '?' + queryString) : '';
    };

    $F.util.fillForm = function (selector, obj) {
        if ($(selector).prop('nodeName').toLowerCase() === 'form') {
            for (var key in obj) {
                $('[name=' + key + ']', $(selector)).val(obj[key]);
            }
        }
    };

    $F.util.propertiesExist = function (obj, props) {
        if (!props instanceof Array || !obj instanceof Object) {
            console.error('$F.util.propertiesExist(obj, props) parameters are invalid types.');
            return false;
        }

        var valid = 0;
        for (var i = 0, j = props.length; i < j; i++) {
            if (typeof obj[props[i]] != 'undefined') {
                valid++;
            }
        }

        if (props.length == valid) {
            return true;
        }

        return false;
    };
})(jQuery, $F);
/** Validation Library for Formalhaut **/
(function ($){
    "use strict";
	$.validation = {};
	$.validation.result = [];
	
	$.validation.lang = {
		required: '{0} is required',
		minLength: '{0} have to be at least {1} characters',
		maxLength: '{0} have to be at least {2} characters'
	};
	
	$.validation.start = function() {
		$.validation.result = [];
	};
	
	$.validation.pass = function () {
		if ($.validation.result.length > 0)
			return false;
		else
			return true;
	};
	$.validation.record = function (message) {
		$.validation.result.push(message);
	}
	
	$.validation.alert = function (message) {
		var s = message || '';
		for (var i=0; i<$.validation.result.length; i++) {
			s += '\n' + $.validation.result[i];
		}
		
		alert(s);
	}
	
	$.fn.validation = function (name, prop) {
		var validate = function (v) {
			var val = $(v).val();
			
			console.log(prop);
			console.log(name);
			if (prop.required && val.trim() == '') {
				$.validation.result.push($.validation.lang.required.replace(/\{0\}/g, name));
				return false;
			}
			
			if (prop.minLength && val.length < prop.minLength) {
				$.validation.result.push($.validation.lang.minLength.replace(/\{0\}/g, name).replace(/\{1\}/g, prop.minLength));
				return false;
			}
			
			if (prop.maxLength && val.length > prop.maxLength) {
				$.validation.result.push($.validation.lang.maxLength.replace(/\{0\}/g, name).replace(/\{1\}/g, prop.maxLength));
				return false;
			}
			
			return true;
		};
		
		return validate(this.eq(0));
	}
})(jQuery);
