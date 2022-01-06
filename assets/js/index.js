$(document).ready(function () {
    $(".bg").mouseover(function () {
        //var test = $(this);
        $(this).addClass('activeColor');
        //$(test).css('background-color', 'yellow');
    }).mouseout(function () {
        //var test = $(this);
        $('.activeColor').removeClass('activeColor');

        //$(test).css('background-color', 'red');
    });



    $("#nav ").mouseout(function () {
        $('.activeColor').removeClass('activeColor');

    });

    $(".subnav").mouseout(function () {
        $('.activeColor').removeClass('activeColor');

    });

    $('#headerCarousel, #centerCarousel,#linkCarousel,#partnerCarousel,textCarousel').carousel({
        vertical: true
    });
    $('#partnerCarousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));


    });
});

jssor_1_slider_init = function () {

    var jssor_1_options = {
        $AutoPlay: true,
        $AutoPlaySteps: 5,
        $SlideDuration: 600,
        $SlideWidth: 214,
        $SlideSpacing: 6,
        $Idle: 8000,
        $Cols: 5,
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$,
            $Steps: 5,
            $ChanceToShow: 2
        },
        $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$,
            $SpacingX: 1,
            $SpacingY: 1
        }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    //responsive code begin
    //you can remove responsive code if you don't want the slider scales while window resizing
    function ScaleSlider() {
        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
        if (refSize) {
            refSize = Math.min(refSize, 1097);
            jssor_1_slider.$ScaleWidth(refSize);
        } else {
            window.setTimeout(ScaleSlider, 30);
        }
    }
    ScaleSlider();
    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    //responsive code end
};