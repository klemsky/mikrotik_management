(function($) {

	$.fn.binus_multiselect = function($param, $options) {

		return $(this).each(function($index, $object) {
			if ($(this).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element($element) {
			var $object = $($element);

			$($object).find('select').multiselect($options);

			$(window).load(function() {
				$($object).on('click', '.multiselect', function($e) {
					$e.preventDefault();
					$e.stopPropagation();

					var $target = $(this);
					var $parent = $(this).parents('.btn-group');
                    
                    $('.btn-group').not($parent).removeClass('open');

                    if ($parent.hasClass('open')) {
                        $parent.removeClass('open');
                    } else {
                        $parent.toggleClass('open');
                    }
				});
			});

			$('html').click(function() {
				$object.find('.btn-group').removeClass('open');
			});

			$($object).data('has-init', 'yes');
		}

	}

})(jQuery);