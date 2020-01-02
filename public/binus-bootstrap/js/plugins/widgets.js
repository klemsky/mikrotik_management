(function($) {

	// widget perspective plugin
	$.fn.binus_widget_perspective = function() {

		return $(this).each(function($index, $object) {
			if ($(this).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element(selector_id) {
			var paper = Raphael(selector_id, 183, 99);

			paper.customAttributes.arc = function (xloc, yloc, value, total, R) {
				var alpha = 360 / total * value,
					a = (90 - alpha) * Math.PI / 180,
					x = xloc + R * Math.cos(a),
					y = yloc - R * Math.sin(a),
					path;

				if (total == value) {
					path = [
						["M", xloc, yloc - R],
						["A", R, R, 0, 1, 1, xloc - 0.01, yloc - R]
					];
				} else {
					path = [
						["M", xloc, yloc - R],
						["A", R, R, 0, +(alpha > 180), 1, x, y]
					];
				}

				return {
					path: path
				};
			};

			// Get the data
			var data_value = parseFloat($(selector_id).attr('data-value'));
			var data_scale = parseFloat($(selector_id).attr('data-scale'));

			// Just in case
			if (data_value > data_scale) {
				data_value = data_scale;
			}

			// Calculate the circle's variable
			var target_value = (data_value / data_scale) * 180;
			var target_value_percentile = (data_value / data_scale) * 100;
			var target_scale = 360;

			// Color Scheme
			var start_color = '#afafaf';
			var end_color = '#919191';

			// Centering state value
			var value_start = $(selector_id).find('.state-value .start');
			value_start.css('margin-left', '-' + (value_start.width() / 2 - 5) + 'px');

			var value_end = $(selector_id).find('.state-value .end');
			value_end.css('margin-right', '-' + (value_end.width() / 2 - 5) + 'px');

			// Draw the circle at value == 0, then animate it to the target_value
			var my_arc = paper.path().attr({
			   "stroke": start_color,
			   "stroke-width": 12,
			   "stroke-linecap" : 'round',
			   arc: [100, 100, 0, 360, 84]
			}).transform("t-93,75r270");

			my_arc.animate({
				"stroke": end_color,
				arc: [100, 100, target_value, target_scale, 84]
			}, 2000);

			$(selector_id).data('has-init', 'yes');
		}
	}

	// widget performance plugin
	$.fn.binus_widget_performance = function() {

		return $(this).each(function($index, $object) {
			if ($(this).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element(selector_id) {
			var paper = Raphael(selector_id, 183, 99);

			paper.customAttributes.arc = function (xloc, yloc, value, total, R) {
				var alpha = 360 / total * value,
				a = (90 - alpha) * Math.PI / 180,
				x = xloc + R * Math.cos(a),
				y = yloc - R * Math.sin(a),
				path;

				if (total == value) {
					path = [
						["M", xloc, yloc - R],
						["A", R, R, 0, 1, 1, xloc - 0.01, yloc - R]
					];
				} else {
					path = [
						["M", xloc, yloc - R],
						["A", R, R, 0, +(alpha > 180), 1, x, y]
					];
				}

				return {
					path: path
				};
			};

			// Get the data
			var data_value = parseFloat($(selector_id).attr('data-value'));
			var data_scale = parseFloat($(selector_id).attr('data-scale'));

			// Just in case
			if (data_value > data_scale) {
				data_value = data_scale;
			}

			// Calculate the circle's variable
			var target_value = (data_value / data_scale) * 180;
			var target_value_percentile = (data_value / data_scale) * 100;
			var target_scale = 360;

			// Color Scheme
			var start_color = '#d2302e';

			if ((target_value_percentile > 0) && (target_value_percentile < 10)) {
				var end_color = '#d12f2e';
			} else if ((target_value_percentile >= 10) && (target_value_percentile < 20)) {
				var end_color = '#dd5c33';
			} else if ((target_value_percentile >= 20) && (target_value_percentile < 30)) {
				var end_color = '#e88a39';
			} else if ((target_value_percentile >= 30) && (target_value_percentile < 40)) {
				var end_color = '#f4b73e';
			} else if ((target_value_percentile >= 40) && (target_value_percentile < 50)) {
				var end_color = '#ffe443';
			} else if ((target_value_percentile >= 50) && (target_value_percentile < 60)) {
				var end_color = '#c5cf45';
			} else if ((target_value_percentile >= 60) && (target_value_percentile < 70)) {
				var end_color = '#8bbb47';
			} else if ((target_value_percentile >= 70) && (target_value_percentile < 80)) {
				var end_color = '#50a648';
			} else if ((target_value_percentile >= 80) && (target_value_percentile < 90)) {
				var end_color = '#45a249';
			} else if ((target_value_percentile >= 90)) {
				var end_color = '#16914a';
			}

			// Centering state value
			var value_start = $(selector_id).find('.state-value .start');
			value_start.css('margin-left', '-' + (value_start.width() / 2 - 5) + 'px');

			var value_end = $(selector_id).find('.state-value .end');
			value_end.css('margin-right', '-' + (value_end.width() / 2 - 5) + 'px');

			// Draw the circle at value == 0, then animate it to the target_value
			var my_arc = paper.path().attr({
			   "stroke": start_color,
			   "stroke-width": 12,
			   "stroke-linecap" : 'round',
			   arc: [100, 100, 0, 360, 84]
			}).transform("t-93,75r270");

			my_arc.animate({
				"stroke": end_color,
				arc: [100, 100, target_value, target_scale, 84]
			}, 2000);

			$(selector_id).data('has-init', 'yes');
		}
	}

	// widget wheel plugin
	$.fn.binus_widget_wheel = function() {

		return $(this).each(function($index, $object) {
			if ($(this).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element(selector_id) {
			var paper = Raphael(selector_id, 152, 150);

			paper.customAttributes.arc = function (xloc, yloc, value, total, R) {
				var alpha = 360 / total * value,
				a = (90 - alpha) * Math.PI / 180,
				x = xloc + R * Math.cos(a),
				y = yloc - R * Math.sin(a),
				path;

				if (total == value) {
					path = [
						["M", xloc, yloc - R],
						["A", R, R, 0, 1, 1, xloc - 0.01, yloc - R]
					];
				} else {
					path = [
						["M", xloc, yloc - R],
						["A", R, R, 0, +(alpha > 180), 1, x, y]
					];
				}

				return {
					path: path
				};
			};

			// Get the data
			var data_value = parseFloat($(selector_id).attr('data-value'));
			var data_scale = parseFloat($(selector_id).attr('data-scale'));

			// Just in case
			if (data_value > data_scale) {
				data_value = data_scale;
			}

			// Calculate the circle's variable
			var target_value = ( data_value / data_scale) * 330;
			var target_value_percentile = ( data_value / data_scale) * 100;
			var target_scale = 360;

			// Color Scheme
			var start_color = '#d2302e';

			if ((target_value_percentile > 0) && (target_value_percentile < 10)) {
				var end_color = '#d12f2e';
			} else if ((target_value_percentile >= 10) && (target_value_percentile < 20)) {
				var end_color = '#dd5c33';
			} else if ((target_value_percentile >= 20) && (target_value_percentile < 30)) {
				var end_color = '#e88a39';
			} else if ((target_value_percentile >= 30) && (target_value_percentile < 40)) {
				var end_color = '#f4b73e';
			} else if ((target_value_percentile >= 40) && (target_value_percentile < 50)) {
				var end_color = '#ffe443';
			} else if ((target_value_percentile >= 50) && (target_value_percentile < 60)) {
				var end_color = '#c5cf45';
			} else if ((target_value_percentile >= 60) && (target_value_percentile < 70)) {
				var end_color = '#8bbb47';
			} else if ((target_value_percentile >= 70) && (target_value_percentile < 80)) {
				var end_color = '#50a648';
			} else if ((target_value_percentile >= 80) && (target_value_percentile < 90)) {
				var end_color = '#45a249';
			} else if ((target_value_percentile >= 90)) {
				var end_color = '#16914a';
			}

			// Draw the circle at value == 0, then animate it to the target_value
			var my_arc = paper.path().attr({
			   "stroke": "#d2302e",
			   "stroke-width": 12,
			   "stroke-linecap" : 'round',
			   arc: [100, 100, 0, target_scale, 70]
			}).transform("t-42,114r195");

			my_arc.animate({
				"stroke" : end_color,
				arc: [100, 100, target_value, target_scale, 70]
			}, 2000);

			$(selector_id).data('has-init', 'yes');
		}
	}

	// widget bar plugin
	$.fn.binus_widget_bar = function() {

		return $(this).each(function($index, $object) {
			if ($(this).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element(selector_id) {
			var selector = $(selector_id);
			var percentage = selector.attr('data-percentage');
			var x_labels_width = selector.find('.bar-x-scales').outerWidth();
			var x_label_size = selector.find('.bar-x-scales li').size();
			var x_counted_label_size = x_label_size - 1;
			var x_label_left_divider = x_labels_width / x_counted_label_size;

			for (i = 0;i <= x_label_size;i++) {
				var left = x_label_left_divider * (i - 1);

				if (i == 1) {
					left = -5;
				}

				if (i == x_label_size) {
					selector.find('.bar-x-scales li:nth-child(' + i + ')').css({ 'left' : 'auto', 'right' : -6 });
					continue;
				}
				selector.find('.bar-x-scales li:nth-child(' + i + ')').css('left', left);
			}
			selector.find('.the-bar').css('width', percentage + '%');

			// create an opposite layout
			var bar_width = selector.find('.the-bar').outerWidth();
			var value_width = selector.find('.the-value').outerWidth();

			if (bar_width < value_width) {
				selector.find('.the-value').addClass('opposite').css(
					'left',
					(bar_width - 1) + 'px'
				);
			}

			$(selector_id).data('has-init', 'yes');
		}
	}

	// widget scrolled plugin
	$.fn.binus_widget_scrolled = function() {

		return $(this).each(function($index, $object) {
			if ($(this).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element($element) {
			var $obj   = $($element);
			var $items = $obj.find('.scrolled-item').length;

			$obj.attr('data-items', $items);
			$obj.find('.scrolled-item').each(function($index) {
				$(this).attr('data-number', $index + 1);
			});

			__create_event($element);

			$($element).data('has-init', 'yes');
		}

		function __create_event($element) {
			var $widget = $($element).parents('.widget');

			$widget.on('click', '.widget-scrolled-up', __widget_scrollable);
			$widget.on('click', '.widget-scrolled-down', __widget_scrollable);
			$widget.on('click', '.widget-scrolled-prev', __widget_scrollable);
			$widget.on('click', '.widget-scrolled-next', __widget_scrollable);
		}

		function __widget_scrollable($e) {
			$e.preventDefault();

			var $obj     = $(this);
			var $parents = $obj.parents('.widget');
			var $widget  = $parents.find('.widget-scrolled');
			var $target  = '';

			var $data_show  = parseInt($widget.attr('data-show'));
			var $data_items = parseInt($widget.attr('data-items'));

			if ($obj.hasClass('down')) {
				$target = $widget.find('.scrolled-item:first');
				var $data_number = parseInt($target.attr('data-number'));

				if (($data_number + ($data_show - 1)) == $data_items) {
					return;
				}

				var $distance = 0 - $target.outerHeight();

				$target.animate({
					'margin-top': $distance
				}, 200, function() {
					$(this).appendTo($widget).css('margin-top', '');
				});
			} else if ($obj.hasClass('up')) {
				$target = $widget.find('.scrolled-item:last');
				var $data_number = parseInt($target.attr('data-number'));

				if ($data_number == $data_items) {
					return;
				}

				var $distance = 0 - $target.outerHeight();

				$target.prependTo($widget).css('margin-top', $distance).animate({
					'margin-top': 0
				}, 200, function() {
					$(this).parent().find('.scrolled-item:first').css('margin-top', '');
				});
			} else if ($obj.hasClass('prev')) {
				$target = $widget.find('.scrolled-item:last');
				var $data_number = parseInt($target.attr('data-number'));

				if ($data_number == $data_items) {
					return;
				}

				var $distance = 0 - $target.outerWidth();

				$target.prependTo($widget).css('margin-left', $distance).animate({
					'margin-left': 0
				}, 200, function() {
					$(this).parent().find('.scrolled-item:first').css('margin-left', '');
				});
			} else if ($obj.hasClass('next')) {
				$target = $widget.find('.scrolled-item:first');
				var $data_number = parseInt($target.attr('data-number'));

				if (($data_number + ($data_show - 1)) == $data_items) {
					return;
				}

				var $distance = 0 - $target.outerWidth();

				$target.animate({
					'margin-left': $distance
				}, 200, function() {
					$(this).appendTo($widget).css('margin-left', '');
				});
			}

			if ($widget.hasClass('with-change-label')) {
				var $title;

				if ($obj.hasClass('prev') || $obj.hasClass('up')) {
					$title = $target.attr('data-title');
				} else if ($obj.hasClass('next') || $obj.hasClass('down')) {
					$title = $target.next().attr('data-title');
				}

				$obj.parent().find('.label').text($title);
			}
		}
	}

})(jQuery);