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
