function InitSlider() {
    var windowSize = function () {
        return window.innerWidth;
    }

    var jssor_slider1 = null, jssor_slider2 = null, jssor_slider3 = null;

    var options = {
        $AutoPlay: false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
        $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
        $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
        $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
        $Loop: false,
        $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
        $SlideDuration: 160,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
        $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
        //$SlideHeight: 150,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
        $SlideSpacing: 25, 					                //[Optional] Space between each slide in pixels, default value is 0
        $DisplayPieces: 3,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
        $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
        $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
        $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
        $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
        $HWA:false,

        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
            $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
            $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
            $Steps: 3                                      //[Optional] Steps to go for each navigation request, default value is 1
        }
    };
    $(".slider-container").height(255)
    $(".slide-container").height(200)
    var itemWidth = ($(".product-home-tab .container").width() - 145) / 3;
    if (windowSize() > 980) { //Màn hình desktop, tablet
        options.$SlideWidth = itemWidth
        options.$ArrowNavigatorOptions.$Steps = 3
        options.$DisplayPieces = 3
        if (windowSize() <= 1024) { //Màn hình desktop, tablet 

            $(".slider-container").width($(".product-home-tab .container").width())
            $(".slide-container").width($(".product-home-tab .container").width() - 90)
            options.$SlideWidth = itemWidth
            jssor_slider1 = new $JssorSlider$("slider_container0", options);
        } else //Màn hình desktop lớn hơn 1024
        {
            if (windowSize() > 1170) {
                options.$SlideWidth = itemWidth
                $(".slider-container").width($(".product-home-tab .container").width())
                $(".slide-container").width($(".product-home-tab .container").width() - 92)

            } else {
                options.$SlideWidth = itemWidth
                $(".slider-container").width($(".product-home-tab .container").width())
                $(".slide-container").width($(".product-home-tab .container").width() - 92)
            }

            $(".slide-container").css("left", "45px")
            jssor_slider1 = new $JssorSlider$("slider_container0", options);
        }

    }
    else if (windowSize() >= 760) { //Màn hình mobile rộng
        options.$ArrowNavigatorOptions.$Steps = 1
        options.$DisplayPieces = 1
        options.$SlideWidth = $(".product-home-tab .container").width() - 60
        $(".slider-container").width($(".product-home-tab .container").width())
        $(".slide-container").width($(".product-home-tab .container").width() - 60)
        $(".slider-container").height(260)
        $(".slide-container").height(230)
        jssor_slider1 = new $JssorSlider$("slider_container0", options);

    }
    else if (windowSize() >= 640) { //Màn hình mobile rộng
        options.$ArrowNavigatorOptions.$Steps = 1
        options.$DisplayPieces = 1
        options.$SlideWidth = $(".product-home-tab .container").width() - 60
        $(".slider-container").width($(".product-home-tab .container").width())
        $(".slide-container").width($(".product-home-tab .container").width() - 60)
        $(".slider-container").height(310)
        $(".slide-container").height(280)
        jssor_slider1 = new $JssorSlider$("slider_container0", options);
    }
    else if (windowSize() >= 460) {
        options.$ArrowNavigatorOptions.$Steps = 1
        options.$DisplayPieces = 1
        options.$SlideWidth = $(".product-home-tab .container").width() - 60
        $(".slider-container").width($(".product-home-tab .container").width())
        $(".slide-container").width($(".product-home-tab .container").width() - 60)
        $(".slider-container").height(380)
        $(".slide-container").height(380)
        jssor_slider1 = new $JssorSlider$("slider_container0", options);
    } else {
        options.$ArrowNavigatorOptions.$Steps = 1
        options.$DisplayPieces = 1
        options.$SlideWidth = $(".product-home-tab .container").width() - 60
        $(".slider-container").width($(".product-home-tab .container").width())
        $(".slide-container").width($(".product-home-tab .container").width() - 60)
        $(".slider-container").height(410)
        $(".slide-container").height(380)
        jssor_slider1 = new $JssorSlider$("slider_container0", options);
    }

    //Tab 2
    jssor_slider2 = new $JssorSlider$("slider_container1", options);

    //Tab 3
    jssor_slider3 = new $JssorSlider$("slider_container2", options);

    $(window).on("orientationchange", function () {
        location.reload()
    });
}
