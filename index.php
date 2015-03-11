<?php get_header(); ?>

    <div class="introbg">
        <video class="introvid" autoplay loop poster="pdchome.jpg">
            <source src="<?php bloginfo('stylesheet_directory'); ?>/images/pdchome-desktop.m4v" type="video/mp4">
        </video>
        <div class="vidtint"></div>
        <section class="intro">
            <div>
                <p class="pdc_is">Piscatello Design Center is a  <br />lorem ipsum dolor sit amet, <br />consectetur, adipiscing, et facilisis.</p>
            <div>
        </section>
        <p class="feat_proj_btn">Our Services <br /> <i class="icon-circle_arrow_down"></i></p>
    </div>

    <div class="services_bg">
        <section class="home_services">
            <article>
                <p class="title_num">1</p>
                <h3>Design Thinking</h3>
                <!-- <div class="service_symbol"><img alt="design thinking" src="#"></div> -->
                <p>We provide design consultation and strategy to bring intelligence and clarity to complex communication challenges.</p>
            </article>
            <article>
                <p class="title_num">2</p>
                <h3>Brand Identity</h3>
                <!-- <div class="service_symbol"><img alt="design thinking" src="#"></div> -->
                <p>The systems we design unify the brand experience, integrating everything from the printed material to the signage in the building.</p>
            </article>
            <article>
                <p class="title_num">3</p>
                <h3>Interactive Experiences</h3>
                <!-- <div class="service_symbol"><img alt="design thinking" src="#"></div> -->
                <p>We approach interactive challenges with a keen eye for both functionality and aesthetic. We combine technology and design to create innovative solutions.</p>
            </article>
            <article>
                <p class="title_num">4</p>
                <h3>Environmental Graphics</h3>
                <!-- <div class="service_symbol"><img alt="design thinking" src="#"></div> -->
                <p>Our intuitive wayfinding systems consider the user at every step, creating engaging and memorable experiences.</p>
            </article>
        </section>
    </div>

<?php if( get_field('home_featured') ): ?>
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
                                    <h3 class="project_title">
                                        <a href="<?php echo get_permalink( $project->ID ); ?>"><?php echo $project->post_title ?></a>
                                    </h3>
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
            <?php $i = 0; while( $i < 16 ) : ?>
            <div class="client sixteen-nine" style="background-image:url('<?php bloginfo('stylesheet_directory'); ?>/images/clientlogos.png'); background-position:<?php echo  $i * 6.66 . "%" ?>;"></div>
            <?php $i++; endwhile; ?>
        </aside>
    </div>

<?php get_footer(); ?>