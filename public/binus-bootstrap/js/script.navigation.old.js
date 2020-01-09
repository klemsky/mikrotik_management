(function($) {

	var $menu_container;
	var $offset_menu;
	var $menu_height = 0;
	var $menu_width = 235;

	function __item_collapse($e) {
		if ($e.type == 'scroll') {
			$menu_container.find('.expand-item').removeClass('current').find('.sub-menu').hide(0);
			$menu_container.find('.expand-menu').removeClass('current');
			$menu_container.find('.expand-menu .cloning-menu').remove();
			$menu_container.find('.expand-menu .sub-menu-child-indicator').remove();
			$menu_container.find('.expand-menu .main-menu li.has-menu').removeClass('current');
			$menu_container.find('.expand-menu-container').height(0);
		} else {
			$menu_container.find('.expand-item.current .expand-action').trigger('click');
			$menu_container.find('.expand-item-menu.current .expand-action-menu').trigger('click');
		}

		if ($menu_container.find('.expand-search-form').length > 0) {
			var $sf = $menu_container.find('.expand-search-form');
			var $target = $sf.find('.search-form-field');

			if ($($e.target).hasClass('search-form-field')) {
				return;
			}

			if ($target.width() > 0) {
				var $toggle_width = $target.width() == 0 ? '200px' : '0';

				if ($e.type == 'scroll') {
					$target.stop().animate({
						width: $toggle_width,
						marginLeft: '10px'
					}, 0, function() {
						$target.css('display', 'none').removeClass('has-border');
					});
					return;
				}

				$target.stop().animate({
					width: $toggle_width,
					marginLeft: '10px'
				}, 'fast', function() {
					$target.css('display', 'none').removeClass('has-border');
				});
			}
		}
	}

	function __item_expand($e) {
		$e.preventDefault();
		$e.stopPropagation();

		var $obj     = $(this);
		var $parent  = $obj.parent();
		var $parents = $obj.parents('.navigation');

		if ($parent.hasClass('current')) {

			$parent.find('.sub-menu').stop().slideUp('medium', function() {
				$parent.removeClass('current');
			});

			if ($parents.find('.cloning-menu').length > 0) {
				$parents.find('.cloning-menu').remove();

				if ($parents.find('.sub-menu-child-indicator').length > 0) {
					$parents.find('.sub-menu-child-indicator').remove();
				}
			}
			$parent.find('.has-menu').removeClass('current');
			$parent.find('.expand-menu-container').height(0);

			$('body').removeClass('overflow-hidden');

			return;
		}

		if ($parents.find('.expand-item').hasClass('current')) {
			var $promise = $parents.find('.sub-menu').stop().slideUp('medium', function() {
				$(this).parent().removeClass('current');
			});

			$promise.promise().done(function() {
				$parent.addClass('current').find('.sub-menu').stop().slideDown('medium');
			});
		} else {
			$parent.addClass('current').find('.sub-menu').stop().slideDown('medium');
		}

		$menu_container.find('.expand-menu.current .expand-action-menu').trigger('click');

		if ($menu_container.find('.expand-search-form').length > 0) {
			var $sf = $menu_container.find('.expand-search-form');
			var $target = $sf.find('.search-form-field');

			if ($target.width() > 0) {
				$target.stop().animate({
					width: 0,
					marginLeft: '0'
				}, 'fast', function() {
					$target.removeClass('has-border');
				});
			}
		}
	}

	function __item_expand_menu($e) {
		$e.preventDefault();
		$e.stopPropagation();

		var $obj     = $(this);
		var $parent  = $obj.parent();
		var $parents = $obj.parents('.navigation');

		if ($parent.hasClass('current')) {
			var $total_depth_menu = $('.main-menu').length;

			if ($total_depth_menu == 1) {
				$parent.find('.primary-menu').stop().animate({
					height: 0
				}, 'medium', function() {
					$(this).find('.sub-menu-child-indicator').remove();
					$parent.removeClass('current');
					$parent.removeClass('current');
					$parent.find('.expand-menu-container').height(0);
				});
			} else {
				for (var $i = $total_depth_menu;$i >= 1;$i--) {
					$('.cloning-menu.cloning-depth-' + $i).stop().animate({
						'left': 0
					}, 'fast', function() {
						$(this).remove();

						if ($i == 0) {
							$parent.find('.primary-menu').stop().animate({
								height: 0
							}, 'medium', function() {
								$(this).find('.sub-menu-child-indicator').remove();
								$(this).find('li').removeClass('current');
								$parent.removeClass('current');
								$parent.find('.expand-menu-container').height(0);
							});
						}
					});
				}
			}
			return;
		}

		if ($menu_container.find('.expand-item').hasClass('current')) {
			$menu_container.find('.expand-item.current .expand-action').trigger('click');
		}

		if ($menu_container.find('.expand-search-form').length > 0) {
			var $sf = $menu_container.find('.expand-search-form');
			var $target = $sf.find('.search-form-field');

			if ($target.width() > 0) {
				$target.stop().animate({
					width: 0,
					marginLeft: '0'
				}, 'fast', function() {
					$target.removeClass('has-border');
				});
			}
		}

		var $height = 0;

		if ($menu_height < 290) {
			$height = 290;
		} else {
			$height = $menu_height + 30;
		}

		var $menu_target = $menu_container.find('.main-menu');

		if ($menu_container.hasClass('fixed-layout')) {
			if ($(window).height() < ($menu_height + 105)) {
				$height = $(window).height() - 105;
			} else {
				$height = $menu_height + 29;

				if ($height < 290) {
					$height = 290;
				}
			}
		} else {
			if ($(window).height() < ($menu_height + ($('.top-navigation .navigation').offset().top - $(window).scrollTop()) + 48)) {
				$height = $(window).height() - (($('.top-navigation .navigation').offset().top - $(window).scrollTop()) + 48);
			} else {
				$height = $menu_height + 29;

				if ($height < 290) {
					$height = 290;
				}
			}
		}

		$parent.find('.expand-menu-container').width($menu_width).height(
			($height + 2)
		).find('.primary-menu').height(
			0
		).css('top', 0);

		$parent.addClass('current').find('.primary-menu').stop().animate({
			height: $height
		}, 'fast', function() {
			$(this).find('.sub-menu-wrap').height($height);
		});
	}

	function __search_form_expand($e) {
		$e.preventDefault();
		$e.stopPropagation();

		var $obj     = $(this);
		var $parent  = $obj.parent();
		var $target  = $parent.find('.search-form-field');

		var $toggle_width = $target.width() == 0 ? '200px' : '0';

		if ($target.width() == 0) {
			$target.addClass('has-border').css('display', 'block').stop().animate({
				width: $toggle_width,
				marginLeft: '10px'
			}, 'fast', function() {
				$target.focus();
			});
		} else {
			$target.stop().animate({
				width: $toggle_width,
				marginLeft: '0'
			}, 'fast', function() {
				$target.css('display', 'none').removeClass('has-border');
			});
		}

		$menu_container.find('.expand-item.current .expand-action').trigger('click');
		$menu_container.find('.expand-menu.current .expand-action-menu').trigger('click');
	}

	function __calculate_height_menu() {
		var $menu_target     = $menu_container.find('.main-menu');
		var $set_height_menu = 0;

		if (!$menu_container.find('.expand-menu').hasClass('current')) {
			return;
		}

		if ($menu_container.hasClass('fixed-layout')) {
			if ($(window).height() < ($menu_height + 105)) {
				$set_height_menu = $(window).height() - 105;
			} else {
				$set_height_menu = $menu_height + 29;

				if ($set_height_menu < 290) {
					$set_height_menu = 290;
				}
			}
		} else {
			if ($(window).height() > ($menu_height + ($('.top-navigation .navigation').offset().top - $(window).scrollTop()) + 48)) {
				$set_height_menu = $menu_height + 29;

				if ($set_height_menu < 290) {
					$set_height_menu = 290;
				}
			} else {
				$set_height_menu = $(window).height() - (($('.top-navigation .navigation').offset().top - $(window).scrollTop()) + 48);
			}
		}

		$menu_target.height($set_height_menu);
		$menu_target.find('.sub-menu-wrap').height($set_height_menu);
		$menu_container.find('.expand-menu-container').height($set_height_menu + 2);
	}

	function __set_menu_position() {
		var $offset_curr_menu = $menu_container.offset().top;
		var $offset_window    = $(window).scrollTop();

		if ($offset_window > $offset_curr_menu) {
			$menu_container.addClass('fixed-layout');
			// $('.tagline-banner').addClass('short-banner').css('top', 0);
		} else if($offset_window <= $offset_menu) {
			$menu_container.removeClass('fixed-layout');
			// $('.tagline-banner').removeClass('short-banner').css('top', $(window).scrollTop() + 'px');
		}
	}

	function __show_sub_menu($e) {
		$e.preventDefault();
		$e.stopPropagation();

		var $obj     = $(this);
		var $parent  = $obj.parent();
		var $parents = $obj.parents('.main-menu');
		var $main_parent = $obj.parents('.expand-menu');
		var $main_container = $main_parent.find('.expand-menu-container');
		var $width_menu = 235;

		// define z-index
		var $zindex = 25;

		// define total depth menu
		var $total_depth_menu = $('.main-menu').length;

		// set class menu
		var $class_menu = '';
		if ($total_depth_menu > 1) {
			$class_menu = ' zebra';
		}

		// check if has current class
		if ($parent.hasClass('current')) {

			// get current depth
			var $curr_depth = $parents.attr('data-depth');

			if ($curr_depth == undefined || $curr_depth == '') {
				$curr_depth = 0;
			}

			for (var $i = ($total_depth_menu - 1);$i > $curr_depth;$i--) {

				// close all cloning menu
				$('.cloning-menu.cloning-depth-' + $i).stop().animate({
					'left': 0
				}, 'fast', function() {
					$(this).remove();
					$parent.removeClass('current');

					// set container width
					$('.expand-menu-container').stop().animate({
						'width': ($menu_width * ($('.main-menu').length)) + 5 + 'px'
					}, 1);
				});

				// remove all indicator
				$('.sub-menu-child-indicator.cloning-depth-' + $i).remove();
			}

			return;
		}

		// remove class current
		$parents.find('.has-menu').removeClass('current');

		// check if menu start from first menu
		if ($parents.next().html() !== undefined) {

			// setup total dept menu
			$target_depth_menu = $parents.next().attr('data-depth');

			// define cloning target
			$cloning_target = $parent.find('ul');

			// remove content
			$('.cloning-menu.cloning-depth-' + $target_depth_menu).html('');

			// add current class
			$parent.addClass('current');

			// define sub-menu label
			var $submenu_label = $obj.html();

			// append menu
			$('.main-menu.cloning-depth-' + $target_depth_menu).append('<div class="sub-menu-wrap"></div>');
			$('.main-menu.cloning-depth-' + $target_depth_menu).find('.sub-menu-wrap').height(
				$('.main-menu.cloning-depth-' + $target_depth_menu).height()
			).append($cloning_target.html()).mCustomScrollbar();

			// get parent index
			var $parent_index = $parent.index();

			// append indicator
			var $indicator_class = '';

			if ($target_depth_menu > 1) {
				$indicator_class = ' zebra';
			}

			var $position = __get_indicator_position($parent_index, (parseInt($target_depth_menu) - 1));

			if ($total_depth_menu - $target_depth_menu > 1) {
				$('.main-menu.cloning-depth-' + $target_depth_menu).find('.sub-menu-child-indicator').remove();
				$('.main-menu.cloning-depth-' + $target_depth_menu).find('.mCSB_container').append('<span class="sub-menu-child-indicator cloning-depth-' + (parseInt($target_depth_menu) + 1) + $indicator_class + '"></span>');
				$('.main-menu.cloning-depth-' + $target_depth_menu).find('.sub-menu-child-indicator').css({
					'top' : $position,
					'left': $width_menu
				});
			}

			// set menu indicator position
			$('.sub-menu-child-indicator.cloning-depth-' + $target_depth_menu).stop().animate({
				'top': $position
			});

			if (!$('.main-menu.cloning-depth-' + $target_depth_menu).find('li').first().hasClass('has-menu')) {
				for (var $i = $total_depth_menu;$i > $target_depth_menu;$i--) {
					$('.cloning-menu.cloning-depth-' + $i).stop().animate({
						'left': 0
					}, 'fast', function() {
						$('.cloning-menu.cloning-depth-' + $i).find('.sub-menu-child-indicator').remove();
						$(this).remove();

						// set container width
						$('.expand-menu-container').stop().animate({
							'width': ($menu_width * ($('.main-menu').length)) + 5 + 'px'
						}, 1);
					});
				}

				return;
			}

			if ($('.main-menu.cloning-depth-' + $target_depth_menu).find('li').first().hasClass('has-menu')) {
				var $sub_menu_obj = $('.main-menu.cloning-depth-' + $target_depth_menu).find('li').first();
				$sub_menu_obj.find('> a').trigger('click');
			}

			// calculate height menu
			__calculate_height_menu();

			return;
		}

		// stop
		if ($total_depth_menu == 4) {
			// alert('Sorry, this menu just support for 3 level item');
			return;
		}

		// define cloning target
		$cloning_target = $parent.find('ul');

		// append new menu
		$main_container.append('<ul class="sub-menu main-menu cloning-menu cloning-depth-' + $total_depth_menu + $class_menu + '" data-depth=' + $total_depth_menu + '><div class="sub-menu-wrap"></div></ul>');

		// add current class
		$parent.addClass('current');

		// get parent index
		var $parent_index = $parent.index();

		// define sub-menu label
		var $submenu_label = $obj.html();

		// set container width
		$('.expand-menu-container').stop().animate({
			'width': ($menu_width * ($('.main-menu').length)) + 5 + 'px'
		}, 'fast');

		// calculate menu height
		__calculate_height_menu();

		// append indicator
		var $indicator_class = '';

		if ($total_depth_menu == 1) {
			$indicator_class = ' primary';
		} else if ($total_depth_menu > 2) {
			$indicator_class = ' zebra';
		}

		// get indicator position
		var $position = __get_indicator_position($parent_index, (parseInt($total_depth_menu) - 1));

		$parents.find('.mCSB_container').append('<span class="sub-menu-child-indicator cloning-depth-' + $total_depth_menu + $indicator_class + '"></span>');
		$parents.find('.sub-menu-child-indicator.cloning-depth-' + $total_depth_menu).css({
			'top' : $position,
			'left': $width_menu
		});

		// append sub menu
		var $sub_menu = $('.main-menu.cloning-depth-' + $total_depth_menu);

		$sub_menu.find('.sub-menu-wrap').append($cloning_target.html()).height(
			$('.main-menu.cloning-depth-' + $total_depth_menu).height()
		).mCustomScrollbar();

		$sub_menu.css('z-index', $zindex - $total_depth_menu).stop().animate({
			'left': ($total_depth_menu * $width_menu) + 'px'
		}, 'fast');

		if ($sub_menu.find('li').first().hasClass('has-menu')) {
			var $sub_menu_obj = $('.main-menu.cloning-depth-' + $total_depth_menu).find('li').first();
			$sub_menu_obj.find('> a').trigger('click');
		}
	}

	function __create_menu_element() {
		var $menu_obj = $menu_container.find('.main-menu');
		var $cloning_data = $menu_obj.html();

		// set default height
		$menu_height = $menu_obj.height();

		// create and cloning element
		$menu_obj.html('<div class="sub-menu-wrap"></div>');
		$menu_obj.find('.sub-menu-wrap').append($cloning_data);
		$menu_obj.find('.sub-menu-wrap').mCustomScrollbar();
	}

	function __get_indicator_position($parent_index, $depth) {
		var $target;
		var $position = 0;
		var $last_height = 0;

		if ($depth == 0) {
			$target = $('.main-menu.primary-menu');
		} else {
			$target = $('.main-menu.cloning-depth-' + $depth);
		}

		if ($parent_index == 0) {
			// return $target.find('.mCSB_container > li').first().outerHeight();
		}

		$target.find('.mCSB_container > li').each(function($index) {
			if ($parent_index == $index) {
				$last_height = $(this).outerHeight();
				return false;
			}

			$position = $position + $(this).outerHeight();
		});

		$position = $position - ($last_height / 2 + 10) + $last_height;

		return $position;
	}

	function __click_body_menu($e) {
		$e.stopPropagation();
	}

	/*! Update 27 May 2015 */
	/*! Reference: http://davidwalsh.name/detect-scrollbar-width */
	function __create_scrollbar_measurement() {
		if ($('.scrollbar-measure').length <= 0) {
			// create the measurement node
			var $scroll_div = document.createElement('div');
			$scroll_div.className = 'scrollbar-measure';
			document.body.appendChild($scroll_div);
		}
	}

	function __get_scrollbar_width() {
		var $scroll_div = document.getElementsByClassName('scrollbar-measure')[0];

		// get the scrollbar width
		var $scrollbar_width = $scroll_div.offsetWidth - $scroll_div.clientWidth;

		// return the scrollbar width
		return $scrollbar_width;
	}

	window.binus_navigation = function() {
		/*! set global value */
		$menu_container = $('#header .navigation');
		$offset_menu    = $menu_container.offset().top;
		$menu_height    = $menu_container.find('.main-menu').outerHeight();

		/*! hide nav item */
		$('html').click(__item_collapse);

		/*! set menu position */
		__set_menu_position();

		/*! create element */
		__create_menu_element();

		/*! set menu position */
		$(window).scroll(__set_menu_position);

		/*! calculate height menu when scrolling */
		$(window).scroll(__calculate_height_menu).resize(__calculate_height_menu);

		/*! close item when scrolling */
		$(window).scroll(__item_collapse);

		/*! expand item */
		$('#header').on('click', '.expand-action', __item_expand);
		$('#header').on('click', '.expand-action-menu', __item_expand_menu);

		/*! expand search form */
		$('#header').on('click', '.expand-search-form .icon-click-area', __search_form_expand);

		/*! expand first sub-menu */
		$('#header').on('click', '.main-menu .has-menu > a', __show_sub_menu);

		/*! menu not hide when body menu has clicked */
		$('#header').on('click', '.main-menu', __click_body_menu);

		/*! body not scrolled if cursor above the menu content */
		__create_scrollbar_measurement();

		$('#header').find('.expand-menu-container').mouseenter(function() {
			$('body').addClass('fixed-body').css('padding-right', __get_scrollbar_width() + 'px');

			if ($('.navigation').hasClass('fixed-layout')) {
				$('.navigation .container').css('padding-right', __get_scrollbar_width() + 'px');
			}
		}).mouseleave(function() {
			$('body').removeClass('fixed-body').css('padding-right', '0');

			if ($('.navigation').hasClass('fixed-layout')) {
				$('.navigation .container').css('padding-right', '0');
			}
		});
	};

})(jQuery);