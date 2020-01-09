/** Utility Functions Engine for Formalhaut **/
(function ($, $F) {
    $F.util = {};

    $F.util.buildUrl = function (base, keyval, unescapeValue) {
        var queryString = '';
        var delimiter = '';

        unescapeValue = unescapeValue || false;

        for (var i in keyval) {
            queryString += delimiter;
            queryString += encodeURIComponent(i);

            if (unescapeValue) {
                queryString += '=' + keyval[i];
            } else {
                queryString += '=' + encodeURIComponent(keyval[i]);
            }

            delimiter = '&';
        }

        return (queryString !== '') ? (base + '?' + queryString) : '';
    };

    $F.util.fillForm = function (selector, obj) {
        if ($(selector).prop('nodeName').toLowerCase() === 'form') {
            for (var key in obj) {
                $('[name=' + key + ']', $(selector)).val(obj[key]);
            }
        }
    };

    $F.util.propertiesExist = function (obj, props) {
        if (!props instanceof Array || !obj instanceof Object) {
            console.error('$F.util.propertiesExist(obj, props) parameters are invalid types.');
            return false;
        }

        var valid = 0;
        for (var i = 0, j = props.length; i < j; i++) {
            if (typeof obj[props[i]] != 'undefined') {
                valid++;
            }
        }

        if (props.length == valid) {
            return true;
        }

        return false;
    };
})(jQuery, $F);
