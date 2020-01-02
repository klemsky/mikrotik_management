(function($) {

    $.fn.badm_open_video = function() {
        return this.each(function(index, element) {
            var object = $(element);

            object.click(function(e) {
                e.preventDefault();

                var video_id = object.attr('data-id');
                $.fancybox('<iframe width="640" height="480" src="//www.youtube.com/embed/' + video_id + '?autoplay=1"></iframe>', {
                    wrapCSS     : 'badm-video-popup',
                    openEffect  : 'elastic',
                    closeEffect : 'elastic',
                    nextEffect  : 'fade'
                });
            });
        });
    };

    $.fn.badm_form = function() {
        var element = $(this);

        element.on('click', '.head-nav .nav-btn', function(e) {
            e.preventDefault();

            var object = $(this);
            var parent = object.parents('.head-nav');

            if (object.hasClass('is-prev')) {
                move_prev(object, parent);
            } else {
                move_next(object, parent);
            }
        });

        element.on('click', '.head-subnav .nav-btn', function(e) {
            e.preventDefault();

            var object = $(this);
            var parent = object.parents('.head-subnav');

            if (object.hasClass('is-prev')) {
                move_prev(object, parent);
            } else {
                move_next(object, parent);
            }
        });

        function move_prev(object, parent) {
            var target   = parent.find('ul li:last');
            var distance = 0 - target.outerWidth();

            target.prependTo(parent.find('ul')).css('margin-left', distance).animate({
                'margin-left': 0
            }, 200, function() {
                $(this).parent().find('li:first').css('margin-left', '');
            });
        }

        function move_next(object, parent) {
            var target   = parent.find('ul li:first');
            var distance = 0 - target.outerWidth();

            target.animate({
                'margin-left': distance
            }, 200, function() {
                $(this).appendTo(parent.find('ul')).css('margin-left', '');
            });
        }
    };

    $(document).ready(function() {
        $('.badm-show-video').badm_open_video();
        $('.badm-form').badm_form();
    });

})(jQuery);