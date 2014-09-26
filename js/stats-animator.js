jQuery(document).ready(function($) {
    var bar_graph_children = $(".project_bar_graph .bar");

    bar_graph_children.each(function(){
        var this_new_value = $(this).find(".new_value");
        var this_prev_value = $(this).find(".prev_value");
        var the_new_value = this_new_value.attr("data-value").split(":");
        var the_prev_value = this_prev_value.attr("data-value").split(":");
        var change_value_container = $(this).find(".change_value");

        new_seconds = parseInt(the_new_value[0]) * 60 + parseInt(the_new_value[1]);
        prev_seconds = parseInt(the_prev_value[0]) * 60 + parseInt(the_prev_value[1]);

        prev_perc = Math.round(prev_seconds/new_seconds * 100);
        new_prec = Math.round((1 - prev_seconds/new_seconds) * 100);

        perc_increase = Math.round((new_seconds-prev_seconds)/prev_seconds*100);

        this_prev_value.css("width",prev_perc+"%");
        this_new_value.css("width",new_prec+"%");

        change_value_container.text("+"+perc_increase+"%");

    });
});