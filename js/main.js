jQuery(document).ready(function($) {

    FastClick.attach(document.body);

    var project_thumb = $(".project_thumb");
    var square = $(".square");
    var sixteen_nine = $(".sixteen-nine");
    var two_thirds = $(".two-thirds");
    var fullscreen = $(".fullscreen");
    var fullheight = $(".fullheight");

    function size_two_thirds(){
        two_thirds.each(function(){
            $(this).css( "height", Math.round( $(window).height() * 0.666 ) + "px");
        });
    }
    function size_sixteen_nine(){
        sixteen_nine.each(function(){
            $(this).css( "height", Math.round( $(this).width() * 0.5625 ) + "px");
        });
    }
    function size_square(){
        square.each(function(){
            $(this).css( "height", Math.round( $(this).width() ) + "px");
        });
    }
    function fullscreen_size(){
        fullscreen.each(function(){
            $(this).css( { height: $(window).height(), width: $(window).width() } );
        });
    }
    function fullheight_size(){
        fullheight.each(function(){
            $(this).css( { height: $(window).height() } );
        });
    }
    function fadein_element(element, speed) {
        element.delay(100).animate({opacity:1}, speed);
    }

    function fadein_each(element, speed, delay) {
        element.each(function(index){
            $(this).delay(index*delay).animate({
                opacity: 1
            }, speed);
        });
    }

    $(window).load(function(){
        fadein_each(project_thumb, 500);
        fadein_element($(".home_featured"), 500);
    });

    $(".highlight_label").sticky({topSpacing:0});

    size_square();
    size_sixteen_nine();
    size_two_thirds();
    fullscreen_size();
    fullheight_size();

    $(window).resize(function(){
        size_square();
        size_sixteen_nine();
        size_two_thirds();
        fullscreen_size();
        fullheight_size();
    });

(function( $ ) {
    $(function() {
        if( $( "#pagination" ).length ) {
            $( "#pagination" ).wpPagination();
        }
    });
    
})( jQuery );

});