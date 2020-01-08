/** This is a compatibility layer for Formalhaut engine.
  * This file is only temporary and might be removed when the system isn't needed anymore
  **/
var BM = {};
(function ($, $F) {
    "use strict";
    
    $F.compat = {};
    
    $F.compat.subViewInit = function (navSubView) {
        if (navSubView != null) {
            return navSubView;
        }
        
        // Access global var of window.subView
        if (window.subView) {
            var sv = window.subView;
            
            // Clean up the global variable
            delete window.subView;
            sv.afterLoad = sv.onLoaded;
            
            console.warn('Using deprecated var subView. Please change to $F.loadView.');
            alert('Using deprecated var subView. Please change to $F.loadView.');
            
            return sv;
        }
    };
    
    $F.compat.popupSubViewInit = function (navSubView) {
        if (navSubView != null) {
            return navSubView;
        }
        
        // Access global var of window.subView
        if (window.popupSubView) {
            var sv = window.popupSubView;
            
            // Clean up the global variable
            delete window.popupSubView;
            sv.afterLoad = sv.onLoaded;
            
            console.warn('Using deprecated var popupSubView. Please use $F.loadView with "popup: true".');
            alert('Using deprecated var popupSubView. Please use $F.loadView with "popup: true".');
            
            return sv;
        }
    };
    
    $F.config.hook(function() {
        BM.ajax = function (data) {
            $F.ajax(data);
        };
        
        BM.serviceUri = $F.config.get('serviceUri');
    });
})(jQuery, $F);
