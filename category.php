<?php get_header()?>

        <?php $var = get_queried_object();	?>
       	<h1><?php echo $var->cat_name?></h1>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        	
        	<h2><?php the_title()?></h2>
            <?php the_post_thumbnail('thumbnail' , array('class'=>'alignleft'))?>
            <?php the_content()?>
            
        <?php endwhile; else: ?>
        Sorry, no posts matched your criteria.
        <?php endif; ?>
        
<?php get_footer()?>