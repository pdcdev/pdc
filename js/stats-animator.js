jQuery(document).ready(function($) {

    var bar_graph_children = $(".project_bar_graph .bar"),
        window_image_children = $(".page_views > img");

    function animate_contrast_map(){
        bar_graph_children.each(function(i){
            var prev_bar     = $(this).find(".prev_value"),
                next_bar     = $(this).find(".new_value"),
                prev_width   = prev_bar.width(),
                next_width   = next_bar.width()-5;

            prev_bar.css({width:0, opacity: 1}).delay(i*200).animate({
                width: prev_width
            }, 1000, "easeOutSine", function(){
                $(this).find(".row_title").animate({opacity:1}, 500, "easeInSine");
            });

            next_bar.css({width:0, opacity: 1}).delay(i*200).animate({
                width: next_width
            }, 1000, "easeOutExpo", function(){
                $(this).find(".change_value").animate({opacity:1}, 500, "easeInSine");
            });

        });
    }
    function page_views_animation(){
        var page_views = $(".page_views .number"),
            page_views_value = page_views.attr("data-value");
            var percent_counter = 1;

        var animation_counter = window.setInterval(function(){
            if(percent_counter <= page_views_value) {
                page_views.text(percent_counter+"%");
                percent_counter++;
            } else {
                clearInterval(animation_counter);
                $(window_image_children.get().reverse()).each(function(i){
                    $(this).delay(i*150).animate({opacity: 1}, 1000, "easeOutSine");
                });
            }
        }, 25);

    }


    

    page_views_animation();
    animate_contrast_map();
    
});