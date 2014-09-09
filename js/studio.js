jQuery(document).ready(function($) {
    $(window).scroll(function(){
        if( $("body").scrollTop() > $(".about_image").height() ) {
            $(".header_container").addClass("solidbg").removeClass("clearbg");
        } else {
            $(".header_container").addClass("clearbg").removeClass("solidbg");
        }
    });
});