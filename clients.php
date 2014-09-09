<?php get_header(); 

/*
    Template Name: Clients
*/

?>

    <?php while( have_posts() ) : the_post(); ?>
    <div class="clients_wrapper">
        <aside class="clients">
            <?php $i = 0; while( $i < 16 ) : ?>
            <div class="client sixteen-nine" style="background-image:url('<?php the_field('clients_grid'); ?>'); background-position:<?php echo  $i * 6.66 . "%" ?>;"></div>
            <?php $i++; endwhile; ?>
        </aside>
    </div>
    <?php endwhile; ?>

<?php get_footer(); ?>