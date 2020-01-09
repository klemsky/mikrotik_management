(function($) {

	$.fn.binus_combobox = function() {

		return $(this).each(function($index, $object) {
			if ($(this).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element($element) {
			var $object = $($element);
			var $label  = $('<span class="combobox-label"></span>');

			$object.append($label);
			$object.find('.combobox-label').text(
				$object.find('option:selected').text()
			);

			$object.change(function() {
				var $opt = $(this);
				var $val = $opt.val();
				var $txt = $opt.find('option:selected').text();

				$object.find('.combobox-label').text($txt);
			});

			if ($object.find('select').is(':disabled')) {
				$object.addClass('disabled');
			}

			$object.data('has-init', 'yes');
		}

	}

})(jQuery);