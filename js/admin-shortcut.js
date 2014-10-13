jQuery(document).ready(function($) {
    var a = false,
        d = false,
        m = false,
        i = false,
        n = false,
        body = $("body");

    body.keypress(function(e){

        switch (e.keyCode) {
            case 97:
                if( a == false ) { a = true; }
            break;

            case 100:
                if( a == true )  { d = true; }
            break;

            case 109:
                if( d == true )  { m = true; }
            break;

            case 105:
                if( m == true )  { i = true; }
            break;

            case 110:
                if( i == true )  { window.location = "http://www.piscatello.com/wp-admin"; }
            break;

            default:
                a = false,
                d = false,
                m = false,
                i = false,
                n = false;
            break;
        }

    });
});