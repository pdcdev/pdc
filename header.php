<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php
                wp_title( '-', true, 'right');
                bloginfo( 'name' );
            ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <?php wp_head(); ?>
        <script type="text/javascript" src="http://fast.fonts.net/jsapi/dd228574-4dab-4330-8c69-17a6a414a03f.js"></script>
        <script type="text/javascript">
            // var _gaq = _gaq || [];
            // _gaq.push(['_setAccount', 'UA-24286242-2']);
            // _gaq.push(['_trackPageview']);
        
            // (function() {
            // var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            // ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            // var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            // })();
        </script>
    </head>
    <body>
    <div class="header_container active<?php if( is_page("projects") || is_page("contact") ) { echo " solidbg"; } else { echo " clearbg"; } ?>">
        <header>
            <div class="logo_container header_expanded">
                <h1 class="logo"><a class="full_title" href="<?php echo home_url(); ?>">Piscatello Design Centre</a><a class="short_title" href="<?php echo home_url(); ?>">PDC</a></h1>
            </div>
            <nav class="main_nav inactive" data-state="0">
                <a class="nav_btn"></a>
                <?php wp_nav_menu(array(
                    'container'       => 'div',
                    'container_class' => 'nav_container',
                    'menu_class' => 'active'
                )); ?>
            </nav>
        </header>
    </div>
    <div <?php if( is_page("projects") || is_page("contact") ) { echo "class='header_ghost'"; } ?>></div>