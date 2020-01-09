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
