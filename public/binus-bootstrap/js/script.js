(function($) {

	/* bootstrap scope */
	$.fn.binus_bootstrap = function() {

		// init components
		$('.accordion', this).binus_accordion();
		$('.body-navigation', this).binus_body_navigation();
		$('.custom-chosen', this).binus_advanced_combobox();
		$('.custom-combobox', this).binus_combobox();
		$('.custom-datepicker', this).binus_datepicker();
		$('.custom-timepicker', this).binus_timepicker();
		$('.custom-datetimepicker', this).binus_datetimepicker();
		$('.custom-scrollbar', this).binus_scrollbar();
		$('.custom-uploader', this).binus_uploader();
		$('.editor', this).binus_editor();
		$('.freeze-pane', this).binus_freeze_pane({
            on_window_load: true
        });
		$('.has-tooltip', this).binus_tooltip();
		$('.tabulation', this).binus_tabulation();
		$('.toggle', this).binus_toggle();

		// init widgets
		$('.widget', this).binus_widgets();

		// update 13 May 2015
		if (jQuery().binus_multiselect) {
			$('.custom-multiselect', this).binus_multiselect();
		}

		// update 18 June 2015
		if (jQuery().binus_chatting) {
			$('.chatting', this).binus_chatting();
		}
	};

	/* widgets scope */
	$.fn.binus_widgets = function() {

		// init widgets
		$('.bar-meter', this).binus_widget_bar();
		$('.performance-meter', this).binus_widget_performance();
		$('.perspective-meter', this).binus_widget_perspective();
		$('.widget-scrolled', this).binus_widget_scrolled();
		$('.wheel-meter', this).binus_widget_wheel();
	}

	/* footer scope */
	$.fn.binus_footer = function() {
		if ($('.footer').find('.education-link').length > 0) {
			$('.footer').find('.education-link').fancyfields({
				onSelectChange: function($obj, $label, $value) {
					window.open($value, '_blank');
				}
			});
		}

		/* Update 25 Feb 2015 */
		$('.footer').on('click', '.feedback-area #show-form-feedback', function($e) {
			$e.preventDefault();

			var $object = $(this);
			var $parent = $object.parent();

			if ($object.hasClass('active')) {
				// rempve indicator
				$object.removeClass('active');

				// close popup
				$parent.find('.feedback-popup').stop().animate({
					'marginBottom': '130px'
				}, 'fast').fadeOut('fast');

				return;
			}

			// set active indicator
			$object.addClass('active');

			// show popup
			$parent.find('.feedback-popup').stop().fadeIn('fast').animate({
				'marginBottom': '110px'
			}, 'fast');
		});

		$('.footer').on('click', '.feedback-popup #close-form-feedback', function($e) {
			$e.preventDefault();

			var $object  = $(this);
			var $parent  = $object.parent();
			var $parents = $object.parents('.feedback-area');

			// close popup
			$parent.stop().animate({
				'marginBottom': '130px'
			}, 'fast').fadeOut('fast', function() {
				// remove indicator
				$parents.find('#show-form-feedback').removeClass('active');
			});
		});
	}

})(jQuery);