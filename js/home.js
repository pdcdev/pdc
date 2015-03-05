jQuery(document).ready(function($) {
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            animationLoop: true,
            animationSpeed: 1000,
            direction: "horizontal",
            controlNav: false,
            directionNav: false,
            slideshowSpeed: 4000,
            useCSS: true,
            start: function(slider) {
                $('.slides li .image_box').click(function(){
                    slider.flexAnimate(slider.getTarget("next"), true);
                });
            }
        });
    });

    var eighty_height = $(".eighty_height");

    function feature_image_height() {
        eighty_height.each(function(){
            $(this).css( "height", Math.round( $(window).height() * 0.9 ) + "px");
        });
    }

    $(window).resize(function(){
        feature_image_height();
    });

    feature_image_height();

    // $(window).scroll(function(){
    //     if( $("body").scrollTop() > $(".image_box").height() ) {
    //         $(".header_container").addClass("solidbg").removeClass("clearbg");
    //     } else {
    //         $(".header_container").addClass("clearbg").removeClass("solidbg");
    //     }
    // });

});