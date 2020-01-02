(function($) {

	$.fn.binus_advanced_combobox = function() {

		return $(this).each(function($index, $object) {
			if ($($object).data('has-init') == 'yes')
				return;

			$($object).find('select').chosen();
			$($object).data('has-init', 'yes');
		});

	};

})(jQuery);