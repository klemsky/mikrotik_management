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
