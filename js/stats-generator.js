jQuery(document).ready(function($) {

    var bar_graph_children = $(".project_bar_graph .bar"),
        all_second_values = [],
        second_pairs = [],
        final_values = [];

    function get_values() {
        bar_graph_children.each(function(){
            var this_new_value  = $(this).find(".new_value"),
                this_prev_value = $(this).find(".prev_value"),
                the_new_value   = this_new_value.attr("data-value").split(":"),
                the_prev_value  = this_prev_value.attr("data-value").split(":"),
                pair_name       = $(this).attr("data-value"),
                prev_seconds    = parseInt(the_prev_value[0]) * 60 + parseInt(the_prev_value[1]),
                new_seconds     = parseInt(the_new_value[0]) * 60 + parseInt(the_new_value[1]);
            
            all_second_values.push(prev_seconds+new_seconds);
            
            second_pairs.push([prev_seconds, new_seconds, pair_name]);
        });
    }

    function calculate_values() {
        // set seconds as % of biggest
        var biggest = Math.max.apply( null, all_second_values );

        $.each(second_pairs, function(){
            var prev_seconds = $(this)[0],
                new_seconds  = $(this)[1],
                this_total   = prev_seconds+new_seconds,
                bar_perc     = Math.round(this_total/biggest*100),
                prev_perc    = Math.round( prev_seconds/new_seconds * 100 ),
                new_perc     = 100 - prev_perc,
                change       = "+" + Math.round( new_perc/prev_perc * 100 )+"%";

            final_values.push([prev_perc, new_perc, bar_perc, change, $(this)[2]]);
        });
    }

    function append_values() {
        $.each(bar_graph_children, function(i){
            $(this).css("width", final_values[i][2]+"%");
            $(this).find(".prev_value").css("width", final_values[i][0]+"%").attr("data-percent", final_values[i][0]);
            $(this).find(".new_value").css("width", final_values[i][1]+"%").attr("data-percent", final_values[i][1]);
            $(this).find(".change_value").text(final_values[i][3]);
            $(this).find(".row_title").text(final_values[i][4]);
        });
    }

    get_values();
    calculate_values();
    append_values();
    
});