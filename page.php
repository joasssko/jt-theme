<?php get_header()?>

<?php $image = get_field('imagen-top-pagina');
	if( !empty($image)){ ?>
    <div class="box-base">
	<img src="<?php echo $image; ?>" />
<?php }else{ ?>
	<div class="box-base marginTop13">
<?php }?>


	<div class="prox-eventos container">
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

				<div class="row">
					
					<div class="formato">
						<?php the_content()?>
							<?php endwhile; else: ?>
							Sorry, no posts matched your criteria.
						<?php endif; ?>
					</div>
				</div>

			</div>

			<div class="col-xs-3">
            	<h2 class="titulo-eventos"><strong>&nbsp;</strong></h2>
				<div class="listar">
					<!--<h3><?php the_title()?></h3> -->
                    <?php if($post->post_parent == '137'){?>
					<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav-eventos' , 'menu' => 'About' ) ); ?>
                    <?php }?>
                    
				</div>	
						

			</div>
		</div>
	</div>	
</div> 
<?php get_footer()?>