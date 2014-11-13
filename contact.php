<?php

/*
    Template Name: Contact Page
*/

get_header(); ?>
<!--     <div class="section_title">
        <h2>Contact</h2>
    </div> -->
        <section class="contact">
            <article class="narrative">
                <h3 class="title">Contact Us</h3>
                <div class="text">
                    <p><?php the_field("contact_us"); ?></p>
                    <p><a class="hover" href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#112;&#114;&#111;&#106;&#101;&#99;&#116;&#115;&#64;&#112;&#105;&#115;&#99;&#97;&#116;&#101;&#108;&#108;&#111;&#46;&#99;&#111;&#109;">&#112;&#114;&#111;&#106;&#101;&#99;&#116;&#115;&#64;&#112;&#105;&#115;&#99;&#97;&#116;&#101;&#108;&#108;&#111;&#46;&#99;&#111;&#109;</a><br/> +1 212 502 4734</p>
                </div>
            </article>
        </section>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <aside class="map">
            <div id="map-canvas"></div>
        </aside>
        <!-- <div class="black_container"> -->
            <section class="address">
                <article class="narrative">
                    <h3 class="title">New York</h3>
                    <div class="text">
                        <p>For all general inquiries, including career opportunities and internships, please email us at:</p>
                        <dl>
                            <!-- <dt>General</dt> -->
                                <dd><a class="hover" href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#115;&#116;&#117;&#100;&#105;&#111;&#64;&#112;&#105;&#115;&#99;&#97;&#116;&#101;&#108;&#108;&#111;&#46;&#99;&#111;&#109;">&#115;&#116;&#117;&#100;&#105;&#111;&#64;&#112;&#105;&#115;&#99;&#97;&#116;&#101;&#108;&#108;&#111;&#46;&#99;&#111;&#109;</a></dd>
                            <!-- <dt>Address</dt> -->
                                <dd>330 West 38th Street Suite 1005<br/>
                                New York<br/>
                                New York 10018</dd>
                            <!-- <dt>Telephone</dt> -->
                                <dd>+1 212 502 4734</dd>
                        </dl>
                    </div>
                </article>
            </section>
        <!-- </div> -->
    <div class="gray_container">
        <?php if( have_rows('positions') ) : ?>
        <section class="jobs">
            <article>
                <h3 class="title">Opportunities</h3>
                <div class="jobs_info">
                    <?php while ( have_rows('positions') ) : the_row(); ?>

                    <div class="position">
                        <h5><?php the_sub_field("position_title"); ?></h5>
                        <div class="jobs_description">
                            <?php the_sub_field("position_description"); ?>
                        </div>
                    </div>

                    <?php endwhile; ?>
                    <?php if( get_field("how_to_apply") ) : ?>
                    <div class="apply">
                        <h4>How To Apply</h4>
                        <?php the_field('how_to_apply'); ?>
                    </div>
                    <?php endif; ?>
                </div> <!-- jobs info -->
            </article>
        </section>
    <?php endif; ?> <!-- have positions -->
    </div>
<?php get_footer(); ?>