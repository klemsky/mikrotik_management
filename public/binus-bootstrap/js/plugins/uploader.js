(function($) {

	$.fn.binus_uploader = function() {

		return $(this).each(function($index, $object) {
			if ($(this).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element($element) {
			$($element).on('change', '.upload-area', function() {
				var $obj    = $(this);
				var $parent = $obj.parent();
				var $file_name = $obj[0].files[0].name;

				$parent.find('.field-temporary').val($file_name);
			});

			$($element).data('has-init', 'yes');
		}

	};

})(jQuery);