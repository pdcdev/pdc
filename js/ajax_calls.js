jQuery(document).ready(function($) {
    var news_container = $(".news_container");
    var load_more = $("#pagination-loader");

    // var loader_mark = "<p class=\"loaderdots\"><span class=\"ldr ldr1\"></span><span class=\"ldr ldr2\"></span><span class=\"ldr ldr3\"></span><span class=\"ldr ldr4\"></span></p>";

    function get_items(the_page) {
        $.ajax({
            url: my_ajax_script.ajaxurl,
            data: ({
                action : 'query_news',
                page : the_page ? the_page : 1
            }),
            dataType: 'json',
            success: function(response) {
                append_items(response);
                console.log("result: " + response);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    }

    function append_items(data) {
        $.each(data, function(i, val) {
            var item = val;
            console.log(val);
            $(item).appendTo(news_container).css("opacity","0").delay(i*50).animate({opacity:1}, 200);
        });
    }

    load_more.click(function(){
        get_items();
    });
    get_items();
});