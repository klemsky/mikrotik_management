// Error Handling Module for Formalhaut

(function () {
    window.onerror = function (msg, url, line) {
        if (typeof $F.service == 'function') {
            $F.service({
                url: 'error/reporting',
                type: 'post',
                data: JSON.stringify({
                    error: msg,
                    url: url,
                    line: line
                }),
                success: function (data) {
                    $F.popup.show({
                        content: 'There is an error within the application. The error has been informed to the developer and will be fixed immediately.'
                    });
                }
            });
        }
    };
})();