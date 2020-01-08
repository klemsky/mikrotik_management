(function($) {

    $.fn.binus_portal_search_engine = function() {
        var element = $(this);

        element.on('click', '.link-advanced-search', function(e) {
            e.preventDefault();

            element.removeClass('is-simple-search');
            element.addClass('is-advanced-search');
        });

        element.on('click', '.link-simple-search', function(e) {
            e.preventDefault();

            element.removeClass('is-advanced-search');
            element.addClass('is-simple-search');
        });
    };

    $(document).ready(function() {
        $('.search-engine').binus_portal_search_engine();
    });

})(jQuery);