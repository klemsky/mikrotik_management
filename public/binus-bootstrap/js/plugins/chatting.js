(function($) {

	/**
	 * BINUS chatting plugin
	 *
	 * @option on_submit: function() {}
	 *
	 * @since 1.0
	 */
	$.fn.binus_chatting = function($options) {

		var $settings = $.extend({
			on_submit: null
		}, $options);

		var $elastic_editor = {
			height: 42,
			rows: 1
		};

		var $editor_value = [];

		return $(this).each(function($index, $object) {
			var $element = $(this);

			__elastic_editor($element);
			__section_message($element);
			__section_friend_list($element);
			__section_message_info($element);
		});

		/*! Make editor fluid like Whatsup */
		function __elastic_editor($element) {
			var $chat_body = $element.find('.chat-body');
			var $target    = $element.find('.elastic');

			/* resize textarea */
			autosize($target);

			$target.keyup(function($e) {
				var $object = $(this);

				if ($e.keyCode == 13 && !$e.shiftKey) {
					$e.preventDefault();

					// add callback when user press enter
					if ($.isFunction($settings.on_submit)) {
						$settings.on_submit.call(this);
					} else {
						$('.form-send-message').submit();
					}
				}

				// get current footer height
				var $footer_height = (81 + ($object.outerHeight() - parseInt($elastic_editor.height)));

				// set new body height
				$chat_body.height(610 - $footer_height);
				$chat_body.find('.chat-body-content').height(610 - $footer_height);
			}).on('autosize:resized', function() {
				
			});
		}

		function __section_message($element) {
			// when click add new message button
			$element.on('click', '.chat-list .add-new-message > .button', function($e) {
				$e.preventDefault();

				var $object  = $(this);
				var $parents = $object.parents('.list-wrap');

				$parents.find('.new-message').stop().animate({
					'left': 0
				}, 'fast');
			});

			// when click icon "close"
			$element.on('click', '.chat-list .close-new-message', function($e) {
				$e.preventDefault();

				var $object  = $(this);
				var $parents = $object.parents('.list-wrap');

				$parents.find('.new-message').stop().animate({
					'left': -305
				}, 'fast');
			});
		}

		function __section_friend_list($element) {
			// when click invite friend
			$element.on('click', '.chat-content .invite-friend', function($e) {
				$e.preventDefault();

				var $object  = $(this);
				var $parents = $object.parents('.chat-wrap');

				$parents.find('.friend-list').stop().animate({
					'right': 0
				}, 'fast');
			});

			// when click icon "close"
			$element.on('click', '.chat-content .close-new-message', function($e) {
				$e.preventDefault();

				var $object  = $(this);
				var $parents = $object.parents('.chat-wrap');

				$parents.find('.friend-list').stop().animate({
					'right': -306
				}, 'fast');
			});
		}

		function __section_message_info($element) {
			// when click invite friend
			$element.on('click', '.chat-content .view-message-info', function($e) {
				$e.preventDefault();

				var $object  = $(this);
				var $parents = $object.parents('.chat-wrap');

				$parents.find('.message-info').stop().animate({
					'right': 0
				}, 'fast');
			});

			// when click icon "close"
			$element.on('click', '.chat-content .close-new-message', function($e) {
				$e.preventDefault();

				var $object  = $(this);
				var $parents = $object.parents('.chat-wrap');

				$parents.find('.message-info').stop().animate({
					'right': -306
				}, 'fast');
			});
		}
	}

})(jQuery);