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
    <div class="clients_wrapper graybg">
        <aside class="clients">
            <img class="logos_desktop" src="<?php bloginfo('stylesheet_directory'); ?>/images/client_logos/PDC_ClientLogos_Desktop.svg"/>
            <img class="logos_tablet"  src="<?php bloginfo('stylesheet_directory'); ?>/images/client_logos/PDC_ClientLogos_Tablet.svg"/>
            <img class="logos_mobile"  src="<?php bloginfo('stylesheet_directory'); ?>/images/client_logos/PDC_ClientLogos_Mobile.svg"/>
        </aside>
    </div>

<?php get_footer(); ?>