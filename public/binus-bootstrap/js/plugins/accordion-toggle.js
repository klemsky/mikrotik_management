(function($) {

	$.fn.binus_accordion = function() {

		return $(this).each(function($index, $object) {
			if ($(this).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element($element) {
			var $object = $($element);

			$object.on('click', '.item-wrap > .head', function($e) {
				$e.preventDefault();

				var $obj    = $(this);
				var $parent = $obj.parent();

				if ($parent.hasClass('current')) {
					$parent.find('.body').stop().slideUp('medium', function() {
						$parent.removeClass('current');
					});
				} else {
					$parent.parent().find('.body').slideUp('medium', function() {
						$(this).parent().removeClass('current');
					});
					$parent.find('.body').slideDown('medium', function() {
						$parent.addClass('current');
					});
				}
			});

			$object.data('has-init', 'yes');
		}

	};

	$.fn.binus_toggle = function($trigger) {

		return $(this).each(function($index, $object) {
			if ($(this).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element($element) {
			var $object = $($element);

			$object.on('click', '.item-wrap > .head', function($e) {
				$e.preventDefault();

				var $obj    = $(this);
				var $parent = $obj.parent();

				if ($parent.hasClass('current')) {
					$parent.find('.body').stop().slideUp('medium', function() {
						$parent.removeClass('current');
					});
				} else {
					$parent.find('.body').stop().slideDown('medium', function() {
						$parent.addClass('current');
					});
				}
			});

			$object.data('has-init', 'yes');
		}

	};

})(jQuery);