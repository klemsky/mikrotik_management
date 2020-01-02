(function($) {

	$.fn.binus_body_navigation = function($options) {

		var $settings = $.extend({
			item_show: 6,
		}, $options);

		return $(this).each(function($index, $object) {
			if ($(this).data('has-init') == 'yes')
				return;

			var $element = this;

			$(window).load(function() {
				__create_element($element);
			});
		});

		function __create_element($element) {
			var $object     = $($element);
			var $nav_head   = $object.find('.nav-head');
			var $nav_show   = $settings.item_show;
			var $total_menu = $object.find('li').length;

			// set width
			var $nav_head_width = Math.ceil($nav_head.find('ul').width() / parseInt($nav_show));

			$nav_head.find('ul li').css(
				'width', ($nav_head_width + 'px')
			);

			// setup height
			var $nav_head_height_max = 0;

			$nav_head.find('ul li').each(function($i) {
				if ($nav_head_height_max < $(this).find('a').outerHeight()) {
					$nav_head_height_max = $(this).find('a').outerHeight();
				}
				$(this).attr('data-number', $i + 1);
			});

			$nav_head.find('ul li a').height($nav_head_height_max).css(
				'line-height', $nav_head_height_max + 'px'
			);

			$nav_head.height(
				$nav_head.find('ul li').outerHeight()
			);

			$nav_head.find('ul').height(
				$nav_head.find('ul li').outerHeight() + 11
			);

			// check if need navigation
			if ($total_menu > $nav_show) {
				$nav_head.addClass('has-navigation');

				if ($nav_head.find('.btn-nav').length > 0) {
					$nav_head.find('.btn-nav').remove();
				}

				// setup button
				var $btn_prev = $('<a href="#" class="btn-nav prev"></a>');
				var $btn_next = $('<a href="#" class="btn-nav next"></a>');

				$btn_prev.click(function($e) {
					$e.preventDefault();

					var $obj    = $(this);
					var $parent = $obj.parent();
					var $target = $parent.find('ul li:last');
					var $data_number = parseInt($target.attr('data-number'));

					if ($data_number == $total_menu) {
						return;
					}

					var $distance = 0 - $target.outerWidth();

					$target.prependTo($parent.find('ul')).css('margin-left', $distance).animate({
						'margin-left': 0
					}, 200, function() {
						$(this).parent().find('li:first').css('margin-left', '');
					});
				}).appendTo($nav_head.find('.container'));

				$btn_next.click(function($e) {
					$e.preventDefault();

					var $obj    = $(this);
					var $parent = $obj.parent();
					var $target = $parent.find('ul li:first');
					var $data_number = parseInt($target.attr('data-number'));

					if ($data_number + ($nav_show - 1) == $total_menu) {
						return;
					}

					var $distance = 0 - $target.outerWidth();

					$target.animate({
						'margin-left': $distance
					}, 200, function() {
						$(this).appendTo($parent.find('ul')).css('margin-left', '');
					});
				}).appendTo($nav_head.find('.container'));
			}

			__setup_position($element);

			$object.data('has-init', 'yes');
		}

		/* update 1 April 2015 */
		function __setup_position($element) {
			var $object   = $($element);
			var $nav_head = $object.find('.nav-head');
			var $nav_show = $settings.item_show;
			var $total_menu = $object.find('li').length;

			// get current index
			$curr_index = 0;

			$nav_head.find('ul li').each(function($i) {
				var $object = $(this);

				if ($object.hasClass('current')) {
					$curr_index = $i;
				}
			});

			// current number
			$curr_number = $curr_index + 1;

			// set position
			if ($curr_number > $settings.item_show) {
				var $distance = $curr_number - $settings.item_show;

				$nav_head.find('ul li').each(function($i) {
					var $object   = $(this);
					var $number   = parseInt($object.attr('data-number'));

					if ($number > $distance) {
						return;
					}

					$object.appendTo($nav_head.find('ul'));
				});
			}
		}

	};

})(jQuery);