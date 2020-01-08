/** Configuration Processing for Formalhaut **/
(function ($, $F) {
    "use strict";
    
    var hook = [];
    var localConfig = {};
    
    $F.config = {};
    
    $F.config.load = function (config) {
        localConfig = config;
        for (var i in hook) {
            hook[i]();
        }
    };
    
    $F.config.get = function (key) {
        return localConfig[key] ? localConfig[key] : null;
    };
    
    $F.config.hook = function (fn) {
        if (typeof fn === 'function') {
            hook.push(fn);
        }
    };
})(jQuery, $F);
