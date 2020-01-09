/** Input Formatting Toolbelt for Formalhaut **/
(function ($, $F) {
    "use strict";

    $F.inputFormat = {};

    $F.inputFormat.decimal = function (element) {
        $(element).not('.f-input-number').addClass('f-input-number').on('keypress.inputnumber', function (e) {
            if (e.which < 32) {
                return true;
            }

            var dpr = $(this).val();

            processDecimal(this, e.which, false);

            e.preventDefault();

            function processDecimal(el, key, bs) {
                var start, end;
                start = el.selectionStart;
                end = el.selectionEnd;

                var vl = el.value;
                var s = '';
                dpr = $(el).val();

                if (!bs) {
                    s += vl.substr(0, start) + String.fromCharCode(key) + vl.substr(end);
                } else {
                    if (start != end) {
                        s += vl.substr(0, start) + vl.substr(end);
                    } else {
                        s += vl.substr(0, start - 1) + vl.substr(end);
                    }
                }

                if (/^-?([1-9][0-9.]*|0?)(,[0-9]*)?$/.test(s)) {
                    s = number_format(s);
                    dpr = s;
                    el.value = s;
                    if (el.value.length == 1) {
                        el.setSelectionRange(1, 1);
                    } else {
                        if (bs) {
                            el.setSelectionRange(start - 1, start - 1);
                        } else {
                            el.setSelectionRange(start + Math.abs(s.length - vl.length), start + Math.abs(s.length - vl.length));
                        }
                    }
                }
            }

            function number_format(num) {
                num = num.toString();
                if(/^-?[0-9.]*(,[0-9]*)?$/.test(num)) {
                    num=num.replace(/\./g,'').split(',');
                    var s2='',dot='';
                    while(num[0].length>0){
                        if(num[0]=='-') {
                            s2='-'+s2;
                            break;
                        }
                        s2=num[0].substr((num[0].length-3>=0 ? num[0].length-3 : 0), 3)+dot+s2;
                        dot='.';
                        num[0]=num[0].substr(0,num[0].length-3);
                    }
                    if(num.length>1){s2+=','+num[1];}
                    num=s2;
                }

                return num;
            }
        });
    };

    $F.initInput = function () {
        $('.input-time').not('.f-input-time').addClass('f-input-time').on('keyup.inputtime', function (e) {
            if (e.which == 8 || e.which == 46) {
                return;
            }

            var val = $(this).val();
            if (val.length == 3) {
                $(this).val(val.substr(0, 2) + ':' + val.substr(2, 1));
            }
        });
    };

})(jQuery, $F);


