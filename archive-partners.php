<?php get_header()?>

<div class="box-base marginTop13">

	<div class="prox-eventos container">

		

		<div class="row">

			<div class="col-xs-9">		
				<h2 class="marginBottom1 titulo-eventos"><span>About</span> <strong>/ partners</strong></h2>
                <div class="clear separator"></div>
                <div class="row">
                    <div class="formato">
                        <?php echo get_field('contenido-staff' , 'options')?>
                    </div>
				</div>
                
                <div class="row">
				<?php foreach ($posts as $post): ?>

				<div class="col-xs-6 marginBottom2">
					<div class="row paddingBottom2">
						<div class="col-xs-4">
							<?php echo get_the_post_thumbnail($post->ID) ?>
						</div>
						<div class="col-xs-8">	
							<h3 class="normal"><?php echo get_the_title($post->ID) ?></h3>
							<p><a><?php echo get_the_excerpt($post->ID) ?></a></p>
						</div>
					</div>
					<hr/>
				</div>

				<?php endforeach ?>
				</div>
                
			</div>

			<div class="col-xs-3">

				<h2 class="titulo-eventos"><strong>&nbsp;</strong></h2>
				<div class="listar">
					<!--<h3><?php the_title()?></h3> -->
                    
					<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav-eventos' , 'menu' => 'About' ) ); ?>
                    
				</div>

			</div>

		</div>

	</div>	

</div> 
<?php get_footer()?>