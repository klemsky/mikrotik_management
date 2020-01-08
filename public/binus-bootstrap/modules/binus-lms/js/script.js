(function($) {

	// page information toggle
	$.fn.binus_page_information_toggle = function() {

		return $(this).each(function($index, $object) {
			if ($($object).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element($element) {
			$($element).on('click', '.indicator', function($e) {
				$e.preventDefault();

				var $object = $(this);

				$($element).find('.details').slideToggle('medium', function() {
					if ($object.hasClass('current')) {
						$object.removeClass('current');
					} else {
						$object.addClass('current');
					}
				});
			});

			$($element).data('has-init', 'yes');
		}
	}

	// show reply comment on topic discussion (underconstruction)
	$.fn.binus_discussion_show_reply = function() {

		return $(this).each(function($index, $object) {
			if ($($object).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element($element) {
			$element.click(function($e) {
				$e.preventDefault();
			});
		}
	}

    // sitemap
    $.fn.binus_sitemap = function() {
        return $(this).each(function($index, $object) {
            var $element = $($object);

            $element.on('click', '.item.has-child > a', function($e) {
                $e.preventDefault();

                var $item   = $(this);
                var $parent = $item.parent();

                if ($parent.hasClass('expand')) {
                    $parent.find('> .child').stop().slideUp(200, function() {
                        $parent.removeClass('expand');
                    });
                } else {
                    $parent.find('> .child').stop().slideDown(200, function() {
                        $parent.addClass('expand');
                    });
                }
            });
        });
    };

	// binus lms bootstrap
	$.fn.binus_lms = function() {
		$('.page-information').binus_page_information_toggle();
        $('.sitemap').binus_sitemap();

		// additional function
		__add_button_create_event();
	}

	$(document).ready(function() {
		$('body').binus_lms();
	});

	// add button on fullcalendar plugin
	function __add_button_create_event() {
		var $element = $('.has-button-create-event');

		$(window).load(function() {
			var $button = $('');
			$button.appendTo($element.find('.fc-header-right'));
		});
	}

})(jQuery);