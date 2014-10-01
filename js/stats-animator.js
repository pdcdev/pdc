jQuery(document).ready(function($) {

    var bar_graph_children = $(".project_bar_graph .bar"),
        window_image_children = $(".page_views > img"),
        contrast_map_triggered = false,
        page_views_triggered = false;

    function animate_contrast_map(){
        bar_graph_children.each(function(i){
            var prev_bar     = $(this).find(".prev_value"),
                next_bar     = $(this).find(".new_value"),
                prev_width   = prev_bar.width(),
                next_width   = next_bar.width()-5,
                prev_perc_width = prev_bar.attr("width"),
                next_perc_width = next_bar.attr("width");
                
                window.console.log(prev_perc_width,next_perc_width);
            
            $(".bar_title").addClass("visible");

            prev_bar.css({width:0, opacity: 1}).delay(i*200).animate({
                width: prev_width
            }, 1000, "easeOutSine", function(){
                $(this).css("width",$(this).attr("data-percent")+"%").find(".row_title").animate({opacity:1}, 500, "easeInSine");
            });

            next_bar.css({width:0, opacity: 1}).delay(i*200).animate({
                width: next_width
            }, 1000, "easeOutExpo", function(){
                $(this).css("width",$(this).attr("data-percent")+"%").find(".change_value").animate({opacity:1}, 500, "easeInSine");
            });
        });
    }
    function page_views_animation(){

        $(".stat_pages").addClass("scale_it");

        var page_views = $(".page_views .number"),
            page_views_value = page_views.attr("data-value"),
            percent_counter = 1;

        var animation_counter = window.setInterval(function(){
            if(percent_counter <= page_views_value) {
                page_views.text(percent_counter+"%");
                percent_counter++;
                $(window_image_children.get().reverse()).each(function(i){
                    $(this).delay(i*200).animate({opacity: 1}, 1000, "easeOutSine");
                });
            } else {
                clearInterval(animation_counter);
                $(".page_views .label").animate({opacity:1}, 800, "easeOutSine");

            }
        }, 30); // rate of refresh
    }
    function site_speed_animation() {
        $(".stat_speed").addClass("scale_it");
    }

    $('.project_bar_graph').waypoint(function() {
        if ( !contrast_map_triggered ) {
            animate_contrast_map();
            contrast_map_triggered = true;
        }
    }, {offset: '50%'});

    $('.page_views').waypoint(function() {
        if ( !page_views_triggered ) {
            page_views_animation();
            site_speed_animation();
            page_views_triggered = true;
        }
    }, {offset: '50%'});

    
});