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
        <article class="narrative">
            <h3 class="title">Profile</h3>
            <div class="text">
                <?php if( get_field( "profile" ) ) : ?>
                    <?php the_field( "profile" ); ?>
                <?php endif; ?>
            </div>
        </article>
    </section>
    <div class="gray_container">
        <section class="services">
            <h3 class="title">Services</h3>
            <div class="services_list">
                <article>
                    <h4>Brand Identity</h4>
                    <ol>
                        <li>Brand strategy</li>
                        <li>Naming</li>
                        <li>Identity development</li>
                        <li>Marketing materials</li>
                        <li>Stationery program</li>
                        <li>Books and magazines</li>
                        <li>Print collateral</li>
                    </ol>
                </article>
                <article>
                    <h4>Interactive Experiences</h4>
                    <ol>
                        <li>Website design</li>
                        <li>Website development</li>
                        <li>Digital strategy</li>
                        <li>Content management systems</li>
                        <li>User interface design</li>
                        <li>Digital signage systems</li>
                        <li>Social media strategy</li>
                    </ol>
                </article>
                <article>
                    <h4>Environmental Graphics</h4>
                    <ol>
                        <li>Environmental Graphics</li>
                        <li>Interior graphics and art</li>
                        <li>Donor recognition signage</li>
                        <li>Temporary signage</li>
                        <li>Exhibition design and events</li>
                        <li>Retail experiences</li>
                        <li>Memorial graphics</li>
                    </ol>
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
            <?php $i = 0; while( $i < 16 ) : ?>
            <div class="client sixteen-nine" style="background-image:url('<?php bloginfo('stylesheet_directory'); ?>/images/clientlogos.png'); background-position:<?php echo  $i * 6.66 . "%" ?>;"></div>
            <?php $i++; endwhile; ?>
        </aside>
    </div>

    <?php if ( have_posts() ) :?>
        <aside class="about_image">
            <img src="<?php the_field('studio_secondary'); ?>">
        </aside>
    <?php endif;?>
    
<?php get_footer(); ?>