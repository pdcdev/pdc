<?php
    function just_a_test() {
        $var = get_option('blogname');
        echo "this is a test " . json_encode($var);
        exit();
    }

    function query_news() {



        if ( isset($_GET['page']) ) {

            $the_page = $_GET['page'];

            $args = array(
                'post_type' => 'news',
                'posts_per_page'=> 2,
                'paged' => $the_page
            );
        } else {
            $args = array(
                'post_type' => 'news',
                'posts_per_page'=> 2
            );
        }

        $news_array = array();

        $the_query = new WP_Query( $args );

        while ( $the_query->have_posts() ) : $the_query->the_post();

            $news_image     = get_image( get_field("news_main_image"), "full" );

            $news_title     = get_the_title();
            $news_date      = get_time('d F Y');
            $news_permalink = get_permalink();

            $news_array[] = array(
                'news_image'     => $news_image,
                'news_title'     => $news_title,
                'news_date'      => $news_date,
                'news_permalink' => $news_permalink
            );

        endwhile;
        
        echo json_encode($news_array);
        
        exit();
    }

?>