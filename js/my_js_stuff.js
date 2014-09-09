function my_js_function() {
    jQuery.ajax({
        url: my_ajax_script.ajaxurl,
        data: ({action : 'get_my_option'}),
        success: function(response) {
            window.console.log("ajax call sucessful: ", response);
        }
    });
}
my_js_function();