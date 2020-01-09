(function($) {

	// advanced search
	$.fn.binus_advanced_search = function() {

		return $(this).each(function($index, $object) {
			if ($($object).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element($element) {
			$($element).on('click', '.more-option', function($e) {
				$e.preventDefault();

				var $object = $(this);

				if ($object.hasClass('active')) {
					$($element).find('.area-options').stop().slideUp('medium', function() {
						$object.removeClass('active');
					});

					return;
				}

				$($element).find('.area-options').stop().slideDown('medium', function() {
					$object.addClass('active');
				});
			});

			// re-init combobox
			$($element).find('.custom-combobox').binus_combobox();

			$($element).data('has-init', 'yes');
		}
	}

	// table viewer
	$.fn.binus_table_viewer = function() {

		return $(this).each(function($index, $object) {
			if ($($object).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element($element) {
			$($element).on('click', '.icon-indicator', function($e) {
				$e.preventDefault();

				var $object = $(this);
				var $parent = $object.parents('.item-wrap');

				if ($object.hasClass('active')) {
					$parent.find('.body').stop().slideUp('medium', function() {
						$object.removeClass('active');
					});

					return;
				}

				$parent.find('.body').stop().slideDown('medium', function() {
					$object.addClass('active');
				});
			});

			$($element).data('has-init', 'yes');
		}
	}

	// fullcalendar custom trigger
	$.fn.binus_fullcalendar_trigger = function() {

		return $(this).each(function($index, $object) {
			if ($($object).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element($element) {
			$($element).on('click', '.wrap-head a', function($e) {
				$e.preventDefault();

				var $object = $(this);
				var $parent = $object.parents('.calendar-container');

				if ($object.parent().hasClass('current')) {
					return;
				}

				$($element).find('.wrap-head li').removeClass('current');
				$object.parent().addClass('current');

				if ($object.hasClass('type-grid')) {
					$parent.find('.fullcalendar .icon-grid-view').trigger('click');
				} else if ($object.hasClass('type-list')) {
					$parent.find('.fullcalendar .icon-list-view').trigger('click');
				}
			});

			$($element).data('has-init', 'yes');
		}
	}

	// dropdown filter
	$.fn.binus_dropdown_filter = function($options) {

		var $settings = $.extend({
			on_selected_item : null,
			on_remove_item   : null
		}, $options);

		return $(this).each(function($index, $object) {
			if ($($object).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element($element) {
			$($element).on('click', '.selectbox', function($e) {
				$e.preventDefault();
				$e.stopPropagation();

				var $object = $(this);
				var $parent = $object.parents('.dropdown-filter');

				if ($parent.hasClass('active')) {
					$parent.removeClass('active');
					return;
				}

				$('.dropdown-filter').removeClass('active');
				$parent.addClass('active');
			});

			if ($($element).hasClass('has-depth-filter')) {
				__event_action_filter($element);
			} else {
				__event_action($element);
			}

			$($element).data('has-init', 'yes');

			$('html').click(__item_collapse);
		}

		function __event_action_filter($element) {
			$($element).on('click', 'ul.primary .option', function($e) {
				$e.preventDefault();
				$e.stopPropagation();

				var $object = $(this);
				var $parent = $object.parent();
				var $index  = $parent.index();

				if ($parent.hasClass('current'))
					return;

				$($element).find('.item.clone .target-cloning').removeClass('active').each(function($i) {
					if ($i == $index) {
						$(this).addClass('active');
						return;
					}
				});

				$parent.parent().find('li').removeClass('current');
				$parent.addClass('current');
			});

			$($element).on('click', 'ul.cloning .option', __add_item);
			$($element).on('click', '.item-selected .remove', __remove_item);
		}

		function __event_action($element) {
			$($element).on('click', '.option', __add_item);
			$($element).on('click', '.item-selected .remove', __remove_item);
		}

		function __add_item($e) {
			$e.stopPropagation();

			var $object  = $(this);
			var $parent  = $object.parent();
			var $label   = $object.find('.label').text();
			var $status  = $object.find('.checkbox').attr('checked');
			var $itemid  = $object.find('.checkbox').val();
			var $element = $object.parents('.dropdown-filter');
			var $maxitem = parseInt($element.attr('data-max-item'));

			if ($element.find('.list-filter .item-selected').length >= $maxitem && $status == undefined) {
				$object.find('.checkbox').removeAttr('checked');
				return;
			}

			if ($object.hasClass('has-checkbox')) {
				if ($status == undefined || $status == '') {
					// setup content
					var $content = $('<a class="item-selected ' + $itemid + '">\
						<span class="text">' + $label + '</span>\
						<span class="remove" data-target="' + $itemid + '"></span>\
					</a>');

					// add event action
					$content.on('click', '.remove', __remove_item);

					// append item into filter area
					$content.appendTo($element.find('.list-filter .list-item'));

					// add checked status
					$object.find('.checkbox').prop('checked', true).attr('checked', 'checked');

					// add callback
					if ($.isFunction($settings.on_selected_item)) {
						$settings.on_selected_item.call(this);
					}
				} else {
					// remove selected element
					$element.find('.list-filter .item-selected.' + $itemid).remove();

					// remove checked status
					$object.find('.checkbox').removeAttr('checked');

					// add callback
					if ($.isFunction($settings.on_remove_item)) {
						$settings.on_remove_item.call(this);
					}
				}

				__set_selectbox_label($element);

				if ($element.hasClass('has-depth-filter')) {
					__has_active_option($element);
				}
			} else {
				$($element).find('.selectbox .text-label').text($label);
				$($element).removeClass('active');
				$parent.parent().find('li').removeClass('current');
				$parent.addClass('current');

				// add callback
				if ($.isFunction($settings.on_selected_item)) {
					$settings.on_selected_item.call(this);
				}
			}
		}

		function __remove_item($e) {
			$e.preventDefault();
			$e.stopPropagation();

			var $object = $(this);
			var $parent = $object.parent();
			var $target = $object.attr('data-target');
			var $parents = $object.parents('.dropdown-filter');

			$parent.remove();
			$parents.find('.filter-items .checkbox.' + $target).removeAttr('checked');

			__set_selectbox_label($parents);

			if ($parents.hasClass('has-depth-filter')) {
				__has_active_option($parents);
			}

			if ($.isFunction($settings.on_remove_item)) {
				$settings.on_remove_item.call(this);
			}
		}

		function __set_selectbox_label($element) {
			var $labels = '';

			if ($($element).find('.list-filter .item-selected').length <= 0) {
				$($element).find('.selectbox .text-label').text(
					$($element).attr('data-default-label')
				);
				return;
			}

			$($element).find('.list-filter .item-selected').each(function() {
				$labels += $(this).find('.text').text() + ', ';
			});

			$labels = $labels.substr(0, ($labels.length - 2));

			$($element).find('.selectbox .text-label').text($labels);
		}

		function __item_collapse($e) {
			var $object = $(this);
			$object.find('.dropdown-filter').removeClass('active');
		}

		function __has_active_option($element) {
			var $target = $element.find('ul.primary');

			$target.find('li').each(function($i) {
				var $clone_target = $element.find('.target-cloning:eq(' + $i + ')');

				if ($($clone_target).find('.checkbox[checked="checked"]').length > 0) {
					$(this).addClass('active');
				} else {
					$(this).removeClass('active')
				}
			});
		}
	}

	// binus career bootstrap
	$.fn.binus_career = function() {
		$('.advanced-search').binus_advanced_search();
		$('.table-viewer').binus_table_viewer();
		$('.calendar-container').binus_fullcalendar_trigger();
		$('.dropdown-filter').binus_dropdown_filter({
			on_selected_item: function($e) {
				console.log('selected item');
			},
			on_remove_item: function($e) {
				console.log('remove item');
			}
		});
	}

	$(document).ready(function() {
		$('body').binus_career();
	});

})(jQuery);