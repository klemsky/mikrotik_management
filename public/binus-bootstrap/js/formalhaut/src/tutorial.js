/** Tutorial Processing Engine for Formalhaut **/
(function ($, $F) {
    var tutorialStep = -1,
        tutorialScript = null;

    $F.tutorial = {};

    $F.tutorial.loadTutorial = function (script) {
        $.ajax({
            url: $F.getConfig('tutorialDirectory') + script,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                tutorialScript = data;
                $F.tutorial.processTutorial();
            }
        });
    };

    $F.tutorial.processTutorial = function () {
        if (tutorialScript == null) {
            return;
        }

        tutorialStep++;

        // destroy anything if we reach the end
        if (tutorialScript[tutorialStep] === undefined) {
            $('#tutorialenginelayer').remove();
            $('body').css('overflow', 'auto');
            tutorialScript = null;
            tutorialStep = -1;
            return;
        }

        $F.tutorial.tutorial(tutorialScript[tutorialStep]);

    };

    $F.tutorial.tutorial = function (act) {
        // unbind and rebind to render the tutorial layer on window resize
        var stateAct = act;
        $(window).off('resize.rendertutorial').on('resize.rendertutorial', function(){
            $F.tutorial.tutorial(stateAct);
        });

        act.disableCenter = act.disableCenter || true;

        $('#tutorialenginelayer').remove();

        // disable the global scrolling
        $('body').css('overflow', 'hidden').append('<div id="tutorialenginelayer" style="z-index: 9999;"></div>');

        switch (act.type) {
        case 'show':
        default:
            // define the box
            var north = $('<div style="width: 100%; position: absolute; background: rgba(0, 0, 0, 0.5); top: 0px; z-index: 2000;"></div>');
            var south = $('<div style="width: 100%; position: absolute; background: rgba(0, 0, 0, 0.5); height: 100%; z-index: 2000;"></div>');
            var west = $('<div style="position: absolute; background: rgba(0, 0, 0, 0.5); z-index: 2000;"></div>');
            var east = $('<div style="width: 100%; position: absolute; background: rgba(0, 0, 0, 0.5); z-index: 2000;"></div>');

            if(act.focusNode != undefined) {
                act.x = $(act.focusNode).eq(0).offset().left;
                act.y = $(act.focusNode).eq(0).offset().top;
                act.w = $(act.focusNode).eq(0).innerWidth();
                act.h = $(act.focusNode).eq(0).innerHeight();
            }

            if(act.padding) {
                act.x -= act.padding;
                act.y -= act.padding;
                act.w += act.padding * 2;
                act.h += act.padding * 2;
            }

            var wd = { h: $('html').innerHeight(), w: $('html').innerWidth(), y: $(document).scrollTop() };

            // auto scroll if out of viewport
            if (act.y + act.h < wd.y || act.y < wd.y) {
                $('html,body').stop().animate({ scrollTop: act.y - 50 }, 300);
            } else if (act.y + act.h > wd.h + wd.y || act.y > wd.h + wd.y) {
                $('html,body').stop().animate({ scrollTop: act.y - 50 }, 300);
            }

            north.css({ height: act.y + 'px' });
            south.css({ top: (act.y + act.h) + 'px' });
            west.css({ top: act.y + 'px', width: act.x + 'px', height: act.h + 'px' });
            east.css({ top: act.y + 'px', height: act.h + 'px', left: (act.x + act.w) + 'px' });

            $('#tutorialenginelayer').append(north).append(south).append(west).append(east);

            // disable inner if needed
            if (act.disableCenter) {
                var center = $('<div style="position: absolute; z-index: 500;"></div>');
                center.css({width: act.w, height: act.h, top: act.y, left: act.x});
                $('#tutorialenginelayer').append(center);
            }

            // send in the message box
            var msgbox = $('<div style="border: 3px solid #999;position:absolute; z-index: 2005; width: 300px; height: 100px; background: #fff; padding: 5px;font-size:11px;"></div>');

            var msgw = act.messageW || 300;
            var msgh = act.messageH || 100;
            var msgx = act.x + act.w + 20;
            var msgy = act.y;

            if (act.x + act.w + msgw + 20 > wd.w) {
                msgx = act.x - msgw - 20;
            }

            msgbox.css({top: msgy + 'px', left: msgx + 'px', width: msgw + 'px', height: msgh + 'px' });
            msgbox.html(act.message);
            $('#tutorialenginelayer').append(msgbox);
        }
    };

    $F.tutorial.clearTutorialLayer = function () {
        $('#tutorialenginelayer').remove();
        $('body').css('overflow', 'auto');

        // kill the render event on resize
        $(window).off('resize.rendertutorial');
    };
})(jQuery, $F);
