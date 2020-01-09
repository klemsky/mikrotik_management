(function($) {

	$.fn.binus_editor = function() {

		return $(this).each(function($index, $object) {
			if ($(this).data('has-init') == 'yes')
				return;

			CKEDITOR.replace($($object).attr('id'));
			$($object).data('has-init', 'yes');
		});

	}

})(jQuery);