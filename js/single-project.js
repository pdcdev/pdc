jQuery(document).ready(function($) {

    var more_btn = $(".more_arrow i");

    $(".project_subsection_header").eq(0).addClass("first");

    more_btn.click(function(){{
        $('html, body').animate({
            scrollTop: $(".project_info_section").offset().top
        }, 1000, "easeInOutQuint");
    }});

    $(".project_subsection_header").each(function(){
        $(this).waypoint(function(){
            $(this).animate({opacity: 1}, 600, "easeOutSine");
        }, {offset: '95%'});
    });
    $(window).load(function(){
        $(".more_arrow i").removeClass("hidden").addClass("visible");
    });
    $(window).removeClass("hidden").addClass("visible");
});