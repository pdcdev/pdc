jQuery(document).ready(function($) {

    var container = document.querySelector('#gallery');

    $(window).load(function(){
        var msnry = new Masonry( container, {
            itemSelector: '.item',
            gutter: 10
        });
    });

});