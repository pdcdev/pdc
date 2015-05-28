<?php
/*
    Template Name: News Page
*/
get_header(); ?>
    <div class="news_section">
        <?php
            $args = array(
                'post_type' => 'news',
                'post_count'=> 5
            );
            $the_query = new WP_Query( $args );
        ?>
        <?php if ( have_posts() ) : ?>
        <div class="news_container">
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <article class="news_item">
                    <div class="news_image">
                        <a href="<?php the_permalink(); ?>">
                            <div>
                                <?php if(get_field("news_main_image")) : ?><img src="<?php get_image( get_field("news_main_image"), "full"); ?>"><?php endif; ?>
                            </div>
                        </a> <!-- the permalink -->
                    </div>
                    <div class="news_excerpt">
                        <div class="post_date"><?php the_time('d F Y'); ?></div>
                        <div class="excerpt">
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <div> <?php the_excerpt(); ?> </div>
                        </div>
                    </div>
                </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="internal_btn">
        <a href="#"></i>More News</a>
    </div>
<?php get_footer(); ?>