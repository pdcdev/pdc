<?php
/*
    Template Name: Projects Page
*/
get_header(); ?>
        <section class="projects_description">
            <article class="narrative">
                <h3 class="title"></h3>
                <div class="text">
                    <p>Our projects are focused in three areas: brand identity, interactive experiences, and environmental graphics.</p>
                    <p>Brand identity ensures recognizability, interaction design facilitates maximum accessibility, and environmental graphics make navigation easier.</p>
                    <p>When integrated, they amplify one other and enhance the complete brand experience.</p>
                </div>
            </article>
        </section>

    <section class="projects_section">
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
                                <?php if(get_field("cover_image_hover")) : ?><img src="<?php get_image( get_field("cover_image_hover"), "half"); ?>"><?php endif; ?>
                            </div>
                            <div class="project_label">
                                <p class="project_title"><?php the_title(); ?></p>
                                <?php if( get_field( 'caption' ) ) : ?>
                                    <p class="caption"><?php the_field( 'caption' ); ?></p>
                                <?php endif; ?>
                            </div>
                        </a> <!-- the permalink -->
                    </div>
                </article>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </aside>
    </section>

<?php get_footer(); ?>