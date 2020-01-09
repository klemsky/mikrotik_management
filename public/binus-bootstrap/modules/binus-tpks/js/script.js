(function($) {
    $.fn.modTPKSQuiz = function() {
        var element = $(this);
        var summary = element.find('.quiz-summary');

        summary.on('click', '.summary-title .toggle-indicator', function(e) {
            e.preventDefault();

            var item = $(this);

            item.toggleClass('is-show');
            summary.find('.list-summary').stop().slideToggle('medium');
        });

        element.on('click', '.skip-question', function(e) {
            e.preventDefault();

            window.confirm('Are you sure?');
        });
    };

    $(document).ready(function() {
        $('.tpks-page-quiz').modTPKSQuiz();
    });
})(jQuery);