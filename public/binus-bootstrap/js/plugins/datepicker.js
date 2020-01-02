(function($) {

	// widget datepicker
	$.fn.binus_datepicker = function($options) {

		var $settings = $.extend({
			dateFormat  : 'yy-mm-dd',
			changeYear  : true,
			changeMonth : true,
            beforeShow  : function($input, $inst) {
                $('#ui-datepicker-div').addClass('is-datepicker');
            }
		}, $options);

		return $(this).each(function($index, $object) {
			if ($(this).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element($element) {
			$($element).find('.datepicker').datepicker('destroy');
			$($element).find('.datepicker').datepicker($settings);

			$($element).find('.icon-area').on('click', function() {
                $('#ui-datepicker-div').removeClass('is-timepicker').removeClass('is-datetimepicker');
				$(this).parent().find('.datepicker').datepicker('show');
			});

			$($element).data('has-init', 'yes');
		}
	}

    // widget timepicker
    // links: http://trentrichardson.com/examples/timepicker/
    $.fn.binus_timepicker = function($options) {

        var $settings = $.extend({
            controlType : 'select',
            timeFormat  : 'hh:mm tt',
            beforeShow  : function($input, $inst) {
                $('#ui-datepicker-div').removeClass('is-datepicker').removeClass('is-datetimepicker');
                $('#ui-datepicker-div').addClass('is-timepicker');
            }
        }, $options);

        return $(this).each(function($index, $object) {
            if ($(this).data('has-init') == 'yes')
				return;
			__create_element(this);
        });

        function __create_element($element) {
			$($element).find('.timepicker').timepicker('destroy');
			$($element).find('.timepicker').timepicker($settings);

			$($element).find('.icon-area').on('click', function() {
				$(this).parent().find('.timepicker').timepicker('show');
			});

			$($element).data('has-init', 'yes');
		}
    }

    // widget timepicker
    // links: http://trentrichardson.com/examples/timepicker/
    $.fn.binus_datetimepicker = function($options) {

        var $settings = $.extend({
            dateFormat  : 'yy-mm-dd',
			changeYear  : true,
			changeMonth : true,
            controlType : 'select',
            timeFormat  : 'hh:mm tt',
            beforeShow  : function($input, $inst) {
                $('#ui-datepicker-div').removeClass('is-datepicker').removeClass('is-timepicker');
                $('#ui-datepicker-div').addClass('is-datetimepicker');
            }
        }, $options);

        return $(this).each(function($index, $object) {
            if ($(this).data('has-init') == 'yes')
				return;
			__create_element(this);
        });

        function __create_element($element) {
			$($element).find('.datetimepicker').datetimepicker('destroy');
			$($element).find('.datetimepicker').datetimepicker($settings);

			$($element).find('.icon-area').on('click', function() {
				$(this).parent().find('.datetimepicker').datetimepicker('show');
			});

			$($element).data('has-init', 'yes');
		}
    }

})(jQuery);