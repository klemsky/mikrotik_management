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
})(jQuery);