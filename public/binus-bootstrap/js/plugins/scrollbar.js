(function($) {

	// widget perspective plugin
	$.fn.binus_scrollbar = function() {

		return $(this).each(function($index, $object) {
			if ($(this).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element($element) {
			$($element).data('has-init', 'yes').mCustomScrollbar();
		}

	}

})(jQuery);