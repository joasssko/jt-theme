<?php
/*
Template Name: Page Contacto
*/
?>
<?php get_header()?>
<div class="box-base marginTop13">
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<div class="row">
			<div class="col-xs-9">
				<h2 class="titulo-eventos"><strong><?php the_title()?></strong></h2>
                
				
				<div class="marginTop2 marginBottom2">
					<?php $image = get_field('imagen-top-articulo');
						if( !empty($image) ): ?>
						<img src="<?php echo $image; ?>"  width="100%"/>
					<?php endif; ?>
				</div>

				<div class="row marginBottom3">
					<div class="col-xs-12 paddingLeft0 paddingRight0">
						<?php the_content()?>
							<?php endwhile; else: ?>
							Sorry, no posts matched your criteria.
						<?php endif; ?>
					</div>
				</div>

			</div>

			<div class="col-xs-3">
				<?php echo get_field('google_map') ?>
			</div>
		</div>
	</div>	
</div> 
<?php get_footer()?>