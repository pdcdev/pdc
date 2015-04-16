<?php

/*
    Template Name: Studio Page
*/

get_header(); ?>
    <?php if ( have_posts() ) :?>
        <aside class="about_image">
            <img src="<?php the_field('studio_header'); ?>">
        </aside>
    <?php endif;?>
    <section>
        <?php if( get_field( "profile" ) ) : ?>
        <article class="narrative">
            <h3 class="title">Profile</h3>
            <div class="text">
                    <?php the_field( "profile" ); ?>
                
            </div>
        </article>
        <?php endif; ?>
    </section>
    <div class="gray_container">
        <section class="services">
            <?php if( get_field( "services_description" ) ) : ?>
            <article class="narrative">
                <h3 class="title"></h3>
                <div class="text">
                    <?php the_field( "services_description" ); ?>
                </div>
            </article>
            <?php endif; ?>
            <h3 class="title">Services</h3>
            <div class="services_list">
                <article>
                    <h4>Brand Identity</h4>
                    <p><?php the_field( "brand_identity_services" ); ?></p>
                </article>
                <article>
                    <h4>Interactive Experiences</h4>
                    <p><?php the_field( "interactive_experience_services" ); ?></p>
                </article>
                <article>
                    <h4>Environmental Graphics</h4>
                    <p><?php the_field( "environmental_graphics_services" ); ?></p>
                </article>

            </div>
        </section>
    </div>
    <section class="studio_double">
        <div class="double">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/studio_light.jpg">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/studio_people.jpg">
        </div>
    </section>
    <section class="team">
        <h3>Leadership Team</h3>
        <div>
            <div class="blerb">
                <?php the_field("team_description"); ?>
            </div>
            <?php if( have_rows( 'team_members' ) ) : ?>
            <div class="people">
            <?php while ( have_rows('team_members') ) : the_row(); ?>
                <div class="person">
                    <p class="name"><?php the_sub_field('name'); ?></p>
                    <p class="title"><?php the_sub_field('title'); ?></p>
                </div>
                <?php endwhile;  ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <section>
        <article class="narrative split">
            <h3 class="title">Rocco Piscatello</h3>
            <div class="image">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/rocco.jpg">
            </div>
            <div class="text">
                <?php if( get_field( "rocco_bio" ) ) : ?>
                    <?php the_field( "rocco_bio" ); ?>
                <?php endif; ?>
            </div>
        </article>
    </section>

    <div class="gray_container">
        <section>
            <article class="narrative">
                <h3 class="title">Awards &amp; Recognition</h3>
                <div class="text">
                <?php if( get_field( "awards_&_recognition" ) ) : ?>
                    <?php the_field( "awards_&_recognition" ); ?>
                <?php endif; ?>
                </div>
            </article>
        </section>
    </div>

    <div class="clients_wrapper whitebg">
        <aside class="clients">
            <img class="logos_desktop" src="<?php bloginfo('stylesheet_directory'); ?>/images/client_logos/PDC_ClientLogos_Desktop.svg"/>
            <img class="logos_tablet"  src="<?php bloginfo('stylesheet_directory'); ?>/images/client_logos/PDC_ClientLogos_Tablet.svg"/>
            <img class="logos_mobile"  src="<?php bloginfo('stylesheet_directory'); ?>/images/client_logos/PDC_ClientLogos_Mobile.svg"/>
        </aside>
    </div>

    <?php if ( have_posts() ) :?>
        <aside class="about_image">
            <img src="<?php the_field('studio_secondary'); ?>">
        </aside>
    <?php endif;?>
    
<?php get_footer(); ?>