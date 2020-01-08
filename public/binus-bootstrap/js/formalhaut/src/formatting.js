/** Formatting Toolbelt for Formalhaut **/
(function ($, $F) {
    "use strict";

    $F.format = {};

    $F.format.longDate = function (date, options) {
        if (typeof date != 'string' || /^\d{4}-\d\d-\d\d$/.test(date) == false) {
            if (options && options.bypass) {
                return date;
            }
            return 'Invalid format (yyyy-mm-dd)';
        }

        var month = $F.config.get('months');
        var d = date.split(/-/);
        if(d[1][0]=='0'){
            d[1] = parseInt(d[1][1]);
        } else {
            d[1] = parseInt(d[1]);
        }

        if(d[2][0]=='0'){
            d[2] = d[2][1];
        }
        return d[2] + ' ' + month[d[1]] + ' ' + d[0];
    };

    $F.format.shortDate = function (date, options) {
        if (typeof date != 'string' || /^\d{4}-\d\d-\d\d$/.test(date) == false) {
            if (options && options.bypass) {
                return date;
            }
            return 'Invalid format (yyyy-mm-dd)';
        }

        var month = $F.config.get('shortMonths');
        var d = date.split(/-/);
        if (d[1][0] == '0'){
            d[1] = parseInt(d[1][1]);
        } else {
            d[1] = parseInt(d[1]);
        }

        if(d[2][0] == '0'){
            d[2] = d[2][1];
        }

        return d[2] + ' ' + month[d[1]] + ' ' + d[0];
    };

    $F.format.date = function (date, options) {
        if (typeof date != 'string' || /^\d{4}-\d\d-\d\d$/.test(date) == false) {
            if (options && options.bypass) {
                return date;
            }
            return 'Invalid format (yyyy-mm-dd)';
        }

        var d = date.split(/-/);
        return d[2] + '-' + d[1] + '-' + d[0];
    };

    $F.format.period = function (period) {
        if (/\d{4}-\d-\d/.test(period) === false) {
            return period || '';
        }

        var p = period.split(/-/);
        p[0] = p[0] + '/' + (parseInt(p[0]) + 1).toString();

        if (p[1] == '1') {
            p[1] = 'Odd';
        } else if (p[1] == '2') {
            p[1] = 'Even';
        } else if (p[1] == '3') {
            p[1] = 'Compact';
        }

        if (p[2] == '0') {
            return p[0] + ' - ' + p[1];
        }

        return p[0] + ' - ' + p[1] + ' - ' + p[2];
    };

    $F.format.number = function (number) {
        return $F.format.customNumber(number, '.', ',', ',', '.', false);
    };

    $F.format.cleanNumber = function (number) {
        return $F.format.customNumber(number, '.', ',', ',', '.', true);
    };

    $F.format.customNumber = function (number, commaFrom, thousandFrom, commaTo, thousandTo, trimTrailingZero) {
        commaFrom = commaFrom || '.';
        thousandFrom = thousandFrom || ',';
        commaTo = commaTo || commaFrom;
        thousandTo = thousandTo || thousandFrom;
        trimTrailingZero = trimTrailingZero || false;

        if (number == null) {
            return number;
        }

        var num = number.toString();

        if (new RegExp("^-?[0-9" + thousandFrom + "]*(" + commaFrom + "[0-9]*)?$").test(num)) {
            num = num.replace(thousandFrom, '').split(commaFrom);
            var s2 = '', dot = '';

            if (num[0].length !== 0) {
                while (num[0].length > 0){
                    if (num[0] == '-') {
                        s2 = '-' + s2;
                        break;
                    }

                    s2 = num[0].substr((num[0].length - 3 >= 0 ? num[0].length - 3 : 0), 3) + dot + s2;
                    dot = thousandTo;
                    num[0] = num[0].substr(0, num[0].length - 3);
                }
            } else {
                s2 = '0';
            }

            if (num.length > 1) {
                if (trimTrailingZero) {
                    num[1] = num[1].replace(/0+$/, '');
                }

                if(num[1] != '') {
                    s2 += commaTo + num[1];
                }
            }

            num = s2;
        }

        return num;
    };

    $F.format.shortTime = function (time) {
        if (!time) {
            return '';
        }

        var t = time.split(':');
        return t[0] + ':' + t[1];
    };

    $F.format.longTime = function (time) {
        if (!time) {
            return '';
        }
        var t = time.split(':');
        return t[0] + ':' + t[1] + ':' + t[2].substr(0,2);
    };

    $F.format.dateTime = function (input, formatDateCallback, formatTimeCallback) {
        formatDateCallback = formatDateCallback || 'Date';
        formatTimeCallback = formatTimeCallback || 'ShortTime';

        var t = input.split(' ');
        var call = formatDateCallback;
        var date = $F.format[call](t[0]);

        var time = t[1];
        if(formatTimeCallback != '') {
            var callTime = formatTimeCallback;
            time = $F.format[callTime](time);
        }

        return date + ' ' + time;
    };
})(jQuery, $F);
