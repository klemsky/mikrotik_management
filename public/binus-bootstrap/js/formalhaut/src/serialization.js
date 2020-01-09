/** Data serialization for Formalhaut **/
(function ($, $F) {
    "use strict";

    $F.serialize = function (selector, returnStringify) {
        returnStringify = (returnStringify == null) ? false : returnStringify;

        var json = {};
        jQuery.map($(selector).serializeArray(), function (n, i) {
            var cleanName = n.name.replace(/\[.*\]$/, '');

            if (typeof json[cleanName] == 'undefined') {
                if (/\[\]/.test(n.name)) {
                    json[cleanName] = [n.value];
                } else if (/\[.*?\]/.test(n.name)) {
                    json[cleanName] = {};

                    iterateObject(json[cleanName], n.name, n.value)
                } else {
                    json[cleanName] = n.value;
                }
            } else {
                if (typeof json[cleanName] == 'object') {
                    if (json[cleanName] instanceof Array) {
                        json[cleanName].push(n.value);
                    } else {
                        iterateObject(json[cleanName], n.name, n.value);
                    }
                } else {
                    var temp = json[cleanName];
                    json[cleanName] = [temp, n.value];
                }
            }
        });

        if (returnStringify) {
            return JSON.stringify(json);
        }

        return json;
    };

    function iterateObject(ref, name, value) {
        var reg = /\[(.*?)\]/g;
        var key;
        var keyBefore = null;
        var refBefore = null;
        while (key = reg.exec(name)) {
            if (typeof ref[key[1]] == 'undefined') {
                ref[key[1]] = {}
            }

            refBefore = ref;
            keyBefore = key[1];

            ref = ref[key[1]];
        }

        refBefore[keyBefore] = value;
    }

})(jQuery, $F);
