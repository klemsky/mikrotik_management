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

    $(document).ready(function() {

        $('.page-information').binus_page_information_toggle();

        $('body').find('.violation-option').each(function(index, element) {
            var $object = $(element);

            $object.fancybox({
                wrapCSS: 'popup',
                beforeShow: function() {
                    $object.prop('checked', true);
                    $('.popup').binus_bootstrap();
                },
                afterShow: function() {
                    // Update 27 May 2015
                    var $popup = $('.popup');
                    var $wndow = $(window);

                    if ($popup.find('.fancybox-inner').height() < ($wndow.height() - 40)) {
                        var $content_height = $popup.find('.fancybox-inner').height();
                        var $container = ($wndow.height() - 40);
                        var $margin = (($container - $content_height) / 2);

                        $popup.css('margin-top', $margin + 'px');
                    }

                    $('.popup').css('visibility', 'visible');
                },
                afterClose: function() {
                    $object.prop('checked', false);
                }
            });
        });

    });

})(jQuery);