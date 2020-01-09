(function($) {

	$.fn.binus_tooltip = function() {

		return $(this).each(function($index, $object) {
			if ($(this).data('has-init') == 'yes')
				return;

			$($object).qtip({
				position: {
					my : 'bottom center',
					at : 'top center',
					adjust : {
						y : -10
					}
				}
			});
			$($object).data('has-init', 'yes');
		});

	}

})(jQuery);