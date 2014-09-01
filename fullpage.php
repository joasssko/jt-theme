<?php
/*
Template Name: Plantilla de página especial / fondo negro
*/
?>
<?php get_header()?>

<style type="text/css"> body{ background-color:#000; color:#fff}</style>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title()?></h1>
    <?php the_content()?>        
<?php endwhile; else: ?>
Sorry, no posts matched your criteria.
<?php endif; ?>

<?php get_footer()?>