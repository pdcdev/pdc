jQuery(document).ready(function($) {

    var about_image = $(".about_image");
    var studio_more_arrow = $(".studio_more_arrow i");

    $(window).scroll(function(){
        if( $("body").scrollTop() > $(".about_image").height() ) {
            $(".header_container").addClass("solidbg").removeClass("clearbg");
        } else {
            $(".header_container").addClass("clearbg").removeClass("solidbg");
        }
    });

    studio_more_arrow.click(function(){{
        $('html, body').animate({
            scrollTop: $(".profile_section").offset().top
        }, 1000, "easeInOutQuint");
        studio_more_arrow.removeClass("visible").addClass("hidden");
    }});

    function studio_page_down(){
        if( about_image.height() > $(window).height() ) {
            studio_more_arrow.removeClass("hidden").addClass("visible");
        } else {
            studio_more_arrow.removeClass("visible").addClass("hidden");
        }
    }
    studio_page_down();
    $(window).resize(function(){
        studio_page_down();
    });
});