<?php
/*
    Template Name: Gallery Page
*/
get_header(); ?>
<div id="gallery">
<?php 
$query_images_args = array(
    'post_type' => 'attachment', 'post_mime_type' =>'image', 'post_status' => 'inherit', 'posts_per_page' => -1,
);
$query_images = new WP_Query( $query_images_args );
$images = array();

foreach ( $query_images->posts as $image): ?>
    <div class="item">
        <img src="<?php get_image($image->ID, "half_nocrop"); ?>">
    </div>
<?php endforeach; ?>
</div>

<?php get_footer(); ?>