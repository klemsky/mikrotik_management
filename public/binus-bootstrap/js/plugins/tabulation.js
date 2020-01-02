(function($) {

	$.fn.binus_tabulation = function($options) {

		var $settings = $.extend({
			on_item_click : null
		}, $options);

		return $(this).each(function($index, $object) {
			if ($(this).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element($element) {
			var $object = $($element);

			$object.on('click', '.tab-head li > a', function($e) {
				$e.preventDefault();

				var $obj    = $(this);
				var $parent = $obj.parent();
				var $index  = $parent.index();

				$object.find('.tab-head li').removeClass('current');
				$parent.addClass('current');

				$object.find('.tab-body .tab-body-item').removeClass('current').each(function($key) {
					if ($key == $index) {
						var $item = $(this);
						$item.addClass('current');
						return;
					}
				});

				if ($.isFunction($settings.on_item_click)) {
					$settings.on_item_click.call(this);
				}
			});

			$(window).load(function() {
				$object.find('.tab-body .tab-body-item').css('display', 'none');
				$object.find('.tab-head > ul > li').first().addClass('current');
				$object.find('.tab-body .tab-body-item').first().addClass('current');
				$object.find('.tab-body').addClass('after-load');
			});

			$object.data('has-init', 'yes');
		}

	}

})(jQuery);