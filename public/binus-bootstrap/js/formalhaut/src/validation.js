/** Validation Library for Formalhaut **/
(function ($){
    "use strict";
	$.validation = {};
	$.validation.result = [];
	
	$.validation.lang = {
		required: '{0} is required',
		minLength: '{0} have to be at least {1} characters',
		maxLength: '{0} have to be at least {2} characters'
	};
	
	$.validation.start = function() {
		$.validation.result = [];
	};
	
	$.validation.pass = function () {
		if ($.validation.result.length > 0)
			return false;
		else
			return true;
	};
	$.validation.record = function (message) {
		$.validation.result.push(message);
	}
	
	$.validation.alert = function (message) {
		var s = message || '';
		for (var i=0; i<$.validation.result.length; i++) {
			s += '\n' + $.validation.result[i];
		}
		
		alert(s);
	}
	
	$.fn.validation = function (name, prop) {
		var validate = function (v) {
			var val = $(v).val();
			
			console.log(prop);
			console.log(name);
			if (prop.required && val.trim() == '') {
				$.validation.result.push($.validation.lang.required.replace(/\{0\}/g, name));
				return false;
			}
			
			if (prop.minLength && val.length < prop.minLength) {
				$.validation.result.push($.validation.lang.minLength.replace(/\{0\}/g, name).replace(/\{1\}/g, prop.minLength));
				return false;
			}
			
			if (prop.maxLength && val.length > prop.maxLength) {
				$.validation.result.push($.validation.lang.maxLength.replace(/\{0\}/g, name).replace(/\{1\}/g, prop.maxLength));
				return false;
			}
			
			return true;
		};
		
		return validate(this.eq(0));
	}
})(jQuery);
