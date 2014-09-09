<?php get_header(); ?>

<?php

if( get_field('home_featured') ): ?>
    <div class="home_featured" style="opacity:0">
        <div class="projects_container flexslider">
            <ul class="slides">
        <?php while ( have_rows('home_featured') ) : the_row(); ?>
                <li>
                    <div class="image_container">
                    <?php if(get_sub_field("home_page_image")) : ?>
                        <div class="image_box eighty_height horizontal" style="background-image:url('<?php get_image( get_sub_field('home_page_image'), "cover_nocrop"); ?>');"></div>
                    <?php endif; ?>
                    <?php if(get_sub_field("home_page_image_vertical")) : ?>
                        <div class="image_box eighty_height vertical" style="background-image:url('<?php get_image( get_sub_field('home_page_image_vertical'), "cover_nocrop"); ?>');"></div>
                    <?php endif; ?>
                    </div>
                    <div class="tintbg">
                        <div class="project_label_container twenty_height">
                            <div class="project_label white">
                                <?php
                                    $project = get_sub_field("project");
                                ?>
                                <div class="project_titles">
                                    <h3 class="project_title"><a href="<?php echo get_permalink( $project->ID ); ?>"><?php echo $project->post_title ?></a></h3>
                                    <p class="caption"><a href="<?php echo get_permalink( $project->ID ); ?>"><?php echo $project->caption ?></a></p>
                                </div>
                                <div class="goto_btn">
                                    <a href="<?php echo get_permalink( $project->ID ); ?>">View Project<i class="icon-arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
        <?php endwhile; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>

    <aside class="home_gist">
        <div class="gist_inner">
            <h3>Welcome to <br /> Piscatello Design Centre</h3>
            <p>We partner with our clients to set the vision and strategy required to design and deliver brand experiences that truly engage their audiences.</p>
        </div>
    </aside>

    <section class="goto">
        <article>
            <a href="<?php echo get_permalink( 5 ); ?>">
                <div class="swapper">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/helen.jpg">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/nt_lightbox.jpg">
                </div>
                <div class="label vertical_center_parent">
                    <p class="vertical_center">Projects</p>
                    <div class="divhelper"></div>
                </div>
            </a>
        </article>
        <article>
            <a href="<?php echo get_permalink( 7 ); ?>">
                <div class="swapper">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/studio.jpg">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/studio_eames.jpg">
                </div>
                <div class="label vertical_center_parent">
                    <p class="vertical_center">Studio</p>
                    <div class="divhelper"></div>
                </div>
            </a>
        </article>
    </section>
    <aside class="quote">
        <div>
            <?php
                $rows = get_field('quotes' ); // get all the rows
                $rand_row = $rows[ array_rand( $rows ) ]; // get a random row
                $rand_row_quote = $rand_row['quote_text' ]; // get the sub field value 
                $rand_row_attribution = $rand_row['quote_attribution' ]; // get the sub field value 
            ?>
            <p class="the_quote"><?php echo $rand_row_quote; ?></p>
            <p class="attr">&mdash;<?php echo $rand_row_attribution; ?></p>
        </div>
    </aside>
    <div class="clients_wrapper graybg">
        <aside class="clients">
            <?php $i = 0; while( $i < 16 ) : ?>
            <div class="client sixteen-nine" style="background-image:url('<?php bloginfo('stylesheet_directory'); ?>/images/clientlogos.png'); background-position:<?php echo  $i * 6.66 . "%" ?>;"></div>
            <?php $i++; endwhile; ?>
        </aside>
    </div>

<?php get_footer(); ?>