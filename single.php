<?php get_header()?>

<div class="box-base marginTop13">
	<div class="container prox-eventos "> 	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h2 class="titulo-eventos"><?php the_title()?></h2>
		<div class="row">

			<div class="col-xs-9 row">
				<?php the_content()?>
                
                <?php var_dump(get_field('autor'))?>
                <br /><br />
                <?php var_dump(get_post_meta( $post->ID, 'autor'  ))?>
                        
					<?php endwhile; else: ?>
					Sorry, no posts matched your criteria.
				<?php endif; ?>
				
			</div>

			<div class="col-xs-3">

			</div>

		</div>
		
	</div>	

<?php get_footer()?>