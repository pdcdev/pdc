jQuery(document).ready(function($) {
    var slideTimeout;
    $('#fullpage').fullpage({
        anchors: ['firstPage'],
        autoScrolling: true,
        css3: true,
        controlArrows: false,
        scrollingSpeed: 1000,
        afterRender: function () {
             slideTimeout = setInterval(function () {
                    $.fn.fullpage.moveSlideRight();
                }, 4000);
        },
        onLeave: function (index, direction) {
            if (index == '1') {
                clearInterval(slideTimeout);
            }
        }
    });

    var eighty_height = $(".eighty_height");

    function feature_image_height() {
        eighty_height.each(function(){
            $(this).css( "height", Math.round( $(window).height() ) + "px");
        });
    }

    $(window).resize(function(){
        feature_image_height();
    });

    feature_image_height();

    $(window).scroll(function(){
        if( $("body").scrollTop() > $(".image_box").height() ) {
            $(".header_container").addClass("solidbg").removeClass("clearbg");
        } else {
            $(".header_container").addClass("clearbg").removeClass("solidbg");
        }
    });

});