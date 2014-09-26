jQuery(document).ready(function($) {

    var bar_graph_children = $(".project_bar_graph .bar");

    var all_second_values = [];
    var second_pairs = [];
    var final_values = [];

    function get_values() {
        bar_graph_children.each(function(){
            var this_new_value = $(this).find(".new_value");
            var this_prev_value = $(this).find(".prev_value");
            var the_new_value = this_new_value.attr("data-value").split(":");
            var the_prev_value = this_prev_value.attr("data-value").split(":");
            var pair_name = $(this).attr("data-value");
            // set total seconds
            prev_seconds = parseInt(the_prev_value[0]) * 60 + parseInt(the_prev_value[1]);
            new_seconds  = parseInt(the_new_value[0]) * 60 + parseInt(the_new_value[1]);
            
            all_second_values.push(prev_seconds+new_seconds);
            
            second_pairs.push([prev_seconds, new_seconds, pair_name]);
        });
    }

    function calculate_values() {
        // set seconds as % of biggest
        var biggest = Math.max.apply( null, all_second_values );

        $.each(second_pairs, function(i, val){
            prev_seconds = $(this)[0];
            new_seconds  = $(this)[1];
            
            this_total = prev_seconds+new_seconds;

            bar_perc  = Math.round(this_total/biggest*100);
            prev_perc = Math.round( prev_seconds/new_seconds * 100 );
            new_perc  = 100 - prev_perc;
            change    = "+" + Math.round( new_perc/prev_perc * 100 )+"%";

            final_values.push([prev_perc, new_perc, bar_perc, change, $(this)[2]]);
        });
    }

    function append_values() {

        $.each(bar_graph_children, function(i,value){
            $(this).css("width", final_values[i][2]+"%");
            $(this).find(".prev_value").css("width", final_values[i][0]+"%");
            $(this).find(".new_value").css("width", final_values[i][1]+"%");
            $(this).find(".change_value").text(final_values[i][3]);
            $(this).find(".row_title").text(final_values[i][4])
        });

        // $(".bar[data-value='desktop']").css("width", final_values[0][2]+"%");
        // $(".bar[data-value='desktop'] .prev_value").css("width", final_values[0][0]+"%");
        // $(".bar[data-value='desktop'] .new_value").css("width", final_values[0][1]+"%");
        // $(".bar[data-value='desktop']").find(".change_value").text(final_values[0][3]);

        // $(".bar[data-value='tablet']").css("width", final_values[1][2]+"%");
        // $(".bar[data-value='tablet'] .prev_value").css("width", final_values[1][0]+"%");
        // $(".bar[data-value='tablet'] .new_value").css("width", final_values[1][1]+"%");
        // $(".bar[data-value='tablet']").find(".change_value").text(final_values[1][3]);

        // $(".bar[data-value='mobile']").css("width", final_values[2][2]+"%");
        // $(".bar[data-value='mobile'] .prev_value").css("width", final_values[2][0]+"%");
        // $(".bar[data-value='mobile'] .new_value").css("width", final_values[2][1]+"%");
        // $(".bar[data-value='mobile']").find(".change_value").text(final_values[2][3]);
    }

    get_values();
    calculate_values();
    append_values();
    
});