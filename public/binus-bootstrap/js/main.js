(function($) {	

	$(document).ready(function() {

		// init navigation
		window.binus_navigation();

		// init pre content
		$('.login-role').binus_combobox();

		// init bootstrap
		$('body').binus_bootstrap();

		// init footer
		$('.footer').binus_footer();

		// init fullcalendar
		$event_as_an_array = [
			{
				id: 1,
				title: 'Event Title',
				start: '2015-06-20',
				color: '#0098D7',
				body : [
					{
						title   : 'Place',
						content : 'BINUS INTERNATIONAL SCHOOL SERPONG Jl. Lengkong Karya - Jelupang No. 58 Lengkong Karya Serpong, Tangerang, Indonesia'
					},
					{
						title   : 'Link',
						content : '<a href="http://google.com">http://google.com</a>'
					}
				]
			},
			{
				id: 2,
				title: 'Long Event',
				start: '2015-06-20',
				end  : '2015-06-25',
				color: '#f07273',
				body : [
					{
						title   : 'Description',
						content : 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.'
					}
				]
			},
			{
				id: 3,
				title: 'Long Event',
				start: '2015-06-1',
				end  : '2015-06-9',
				color: '#f07273',
				body : [
					{
						title   : 'Description',
						content : 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.'
					}
				]
			},
			{
				id: 4,
				title: 'Long Event',
				start: '2015-07-20',
				end  : '2015-07-25',
				color: '#f07273',
				body : [
					{
						title   : 'Description',
						content : 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.'
					}
				]
			}
		];
		$event_as_json_feed = 'http://localhost/frontend/binus-bootstrap/json/json.events.php';

		$('.fullcalendar').binus_fullcalendar({
			limit  : 4,
			source : $event_as_an_array
		});

		// fancybox trigger
		$('body').find('.fancybox-trigger').fancybox({
			wrapCSS: 'popup',
			beforeShow: function() {
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
            /*closeBtn: false,
            helpers: {
                overlay: {
                    closeClick: false
                }
            },
            keys: {
                close : null
            }*/
		});

	});

})(jQuery);