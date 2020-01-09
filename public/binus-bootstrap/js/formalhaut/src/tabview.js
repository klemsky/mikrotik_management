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
