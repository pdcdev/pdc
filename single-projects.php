<?php get_header(); ?>

    <?php if( have_posts() ) : ?>

    <?php if( get_field("cover_image") ) : ?>
        <?php if(get_field("cover_image")) : ?>
        <div class="cover_image horizontal" style="background-image:url('<?php get_image( get_field('cover_image'), "cover_nocrop"); ?>');">
        </div>
        <?php endif; ?>
        <?php if(get_field("cover_image_vertical")) : ?>
        <div class="cover_image vertical" style="background-image:url('<?php get_image( get_field('cover_image_vertical'), "full"); ?>');">
        </div>
        <?php endif; ?>
        <div class="more_arrow">
        <?php if( get_field("arrow_color") == "Black" ): ?>
            <i class="icon-down dark_arrow hidden"></i>
        <?php else : ?>
            <i class="icon-down light_arrow hidden"></i>
        <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="project">

    <section class="project_info_section">
        <article class="project_info">
            <h3 class="title">
                <?php the_title(); ?>
            </h3>
            <div class="description">
                <?php the_field('project_description'); ?>
                <?php if( get_field('scope_of_work') ) : ?>
                <div class="project_details">
                    <h5>Services</h5>
                    <ul class="scope">
                    <?php
                        $scope_items = get_field('scope_of_work');
                        foreach ( $scope_items as $item ) {
                            echo "<li>" . $item . "</li>";
                        }
                    ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </article>
    </section>

    <?php if( have_rows('project_layout') ): ?>

    <?php while ( have_rows('project_layout') ) : the_row(); ?>
    
    <!-- begin modules -->
    
        <?php if( get_row_layout() == 'project_sequence' ): ?>
            <section>
                <article class="project_sequence">
                    <?php if( get_sub_field('image_sequence') ) : ?>
                    <div class="flex_sequence">
                        <ul class="slides">
                            <?php $images = get_sub_field('image_sequence'); ?>
                            <?php if( $images ): ?>
                                <?php foreach( $images as $image ): ?>
                                <li>
                                   <img src="<?php get_image( $image['id'], 'cover'); ?>" />
                                </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </article>
            </section>
        <?php endif; ?>

        <?php if( get_row_layout() == 'project_single' ): ?>
            <figure>
                <?php if(get_sub_field('image')) : ?>
                <div class="fig_box">
                    <img src="<?php the_sub_field('image'); ?>" />
                </div>
                <?php endif; ?>
            </figure>
        <?php endif; ?>

        <?php if( get_row_layout() == 'project_double' ): ?>
            <figure class="project_double">
                <?php if(get_sub_field('double_left')) : ?>
                    <img src="<?php get_image( get_sub_field('double_left'), "cover_nocrop" ); ?>" />
                <?php endif; ?>
                <?php if(get_sub_field('double_right')) : ?>
                    <img src="<?php get_image( get_sub_field('double_right'), "cover_nocrop" ); ?>" />
                <?php endif; ?>
            </figure>
        <?php endif; ?>

        <?php if( get_row_layout() == 'project_triple_left_split' ): ?>
            <figure class="project_triple">
                <?php if(get_sub_field('triple_right_image')) : ?>
                    <img src="<?php get_image( get_sub_field('triple_right_image'), "cover" ); ?>" />
                <?php endif; ?>
                <div class="triple_stack">
                    <?php if(get_sub_field('triple_left_top_image')) : ?>
                        <img src="<?php get_image( get_sub_field('triple_left_top_image'), "cover" ); ?>" />
                    <?php endif; ?>
                    <?php if(get_sub_field('triple_left_bottom_image')) : ?>
                        <img src="<?php get_image( get_sub_field('triple_left_bottom_image'), "cover" ); ?>" />
                    <?php endif; ?>
                </div>
            </figure>
        <?php endif; ?>
        
        <?php if( get_row_layout() == 'project_triple_right_split' ): ?>
            <figure class="project_triple">
                <?php if(get_sub_field('triple_left_image')) : ?>
                    <img src="<?php get_image( get_sub_field('triple_left_image'), "cover" ); ?>" />
                <?php endif; ?>
                <div class="triple_stack">
                    <?php if(get_sub_field('triple_right_top_image')) : ?>
                        <img src="<?php get_image( get_sub_field('triple_right_top_image'), "cover" ); ?>" />
                    <?php endif; ?>
                    <?php if(get_sub_field('triple_right_bottom_image')) : ?>
                        <img src="<?php get_image( get_sub_field('triple_right_bottom_image'), "cover" ); ?>" />
                    <?php endif; ?>
                </div>
            </figure>
        <?php endif; ?>
        
        <?php if( get_row_layout() == 'subsection_header' ): ?>
        <section class="project_subsection_header">
            <div>
            <?php if(get_sub_field('subsection_title')) : ?>
                <h4><?php the_sub_field('subsection_title'); ?> <span><?php the_sub_field('subsection_subtitle'); ?></span></h4>
            <?php endif; ?>
            <?php if(get_sub_field('subsection_text')) : ?>
                <div class="subsection_text"><?php the_sub_field('subsection_text'); ?></div>
            <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>

        <?php if( get_row_layout() == 'image_grid' ): ?>
        <figure class="image_grid">
            <div>
            <?php $images = get_sub_field('grid_gallery'); ?>
                <?php if( $images ): ?>
                    <?php foreach( $images as $image ): ?>
                        <div class="image_grid_item">
                            <img src="<?php get_image( $image['id'] , "cover" ); ?>" />
                        </div>
                    <?php endforeach; ?>
            <?php endif; ?>
            </div>
        </figure>
        <?php endif; ?>

        <?php if( get_row_layout() == 'website_link' ): ?>
        <section class="website_link">
            <div>
                <p><a href="<?php the_sub_field('website_url'); ?>" target="_blank">View Website<i class="icon-arrow_right"></i></a></p>
            </div>
        </section>
        <?php endif; ?>

        <?php if( get_row_layout() == 'contrast_graph' ): ?>
        <section class="project_bar_graph">
            <p class="bar_title"><?php the_sub_field('graph_name'); ?></p>
            <?php if ( have_rows('graph_rows') ) : ?>
            <div class="bar_row">
                <?php while ( have_rows('graph_rows') ) : the_row(); ?>
                <div class="bar" data-value="<?php the_sub_field("row_title"); ?>">
                    <div class="prev_value" data-percent="" data-value="<?php the_sub_field("time_a"); ?>"><div class="row_title"></div></div>
                    <div class="new_value" data-percent="" data-value="<?php the_sub_field("time_b"); ?>"><div class="change_value"></div></div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </section>
        <?php endif; ?>

        <?php if( get_row_layout() == 'engagement_info' ): ?>
        <section class="project_stats">
            <div class="stat_pages">
                <div class="page_views">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/stats-image/stats-browser-4.jpg">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/stats-image/stats-browser-3.jpg">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/stats-image/stats-browser-2.jpg">
                    <div class="figure">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/stats-image/stats-browser-1.jpg">
                        <p>
                            <span class="number" data-value="<?php the_sub_field('engagement_value'); ?>"></span>
                            <br/>
                            <span class="label"><?php the_sub_field('engagement_title'); ?></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="stat_speed">
                <div class="site_speed">
                    <p><?php the_sub_field('speed_title_value'); ?></p>
                </div>
                <p class="label"><?php the_sub_field('speed_title'); ?></p>
            </div>
        </section>
        <?php endif; ?>

        <?php if( get_row_layout() == 'quote' ): ?>
        <section class="project_quote">
            <div>
                <p class="the_quote"><?php the_sub_field('quote_text'); ?></p>
                <p class="attr">&mdash;<?php the_sub_field('quote_attr'); ?></p>
            </div>
        </section>
        <?php endif; ?>

        <?php if( get_row_layout() == 'caption' ): ?>
        <section class="project_caption">
            <div>
                <p class="the_caption"><?php the_sub_field('caption_text'); ?></p>
            </div>
        </section>
        <?php endif; ?>

        <?php endwhile; ?>

    <?php endif; ?>
        <!-- end modules --> 
    </div> <!-- project container -->

<?php endif; ?>

<div class="gray_container">
    <section class="projects_section_tiny">
        <div class="more_projects">
            <h3>More Projects</h3>
        </div>
        <?php
            $args = array(
                'post_type' => 'projects'
            );
            $the_query = new WP_Query( $args );
        ?>

        <?php if ( have_posts() ) : ?>
        <aside class="projects_container">
            <div>
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <article class="project_thumb">
                    <div class="image_box">
                        <a href="<?php the_permalink(); ?>">
                            <div class="swapper">
                                <?php if(get_field("cover_image")) : ?><img src="<?php get_image( get_field("cover_image"), "half"); ?>"><?php endif; ?>
                            </div>
                            <div class="project_label">
                                <p class="project_title"><?php the_title(); ?></p>
                                
                            </div>
                        </a> <!-- the permalink -->
                    </div>
                </article>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </aside>
    </section>
    <div class="internal_btn">
        <a href="<?php echo get_permalink(5); ?>"><i class="icon-arrow_left"></i>Back To Projects</a>
    </div>
</div>
<?php get_footer(); ?>