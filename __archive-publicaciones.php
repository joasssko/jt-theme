<?php get_header()?>

<div class="box-base">
	<img src="<?php bloginfo('template_directory');?>/assets/img/galeria/top-investigacion.jpg" alt="">
<div class="prox-eventos">
		<div class="container">
			
			<div class="row">
				<div class="col-xs-9">
                	<h2 class="marginBottom1 titulo-eventos"><span>Publicaciones</span> <strong>/ Regulación económica</strong></h2>
					
					<?php foreach ($posts as $post) : ?>
					<div class="col-xs-6 paddingLeft0 marginTop2">
						
						<div class="row marginBottom2">

							<div class="col-xs-2"><i class="icon-documento"></i></div>
							<div class="col-xs-10 paddingLeft0 detalle-evento">

								<a href="<?php echo get_permalink($post->ID) ?>"><?php echo get_the_title($post->ID) ?></a>

								<div>
									<a href="<?php echo get_permalink($post->ID) ?>" class="flotarLeft padding1 ubicacion">
									<?php $docs = get_field('documentos',$post->ID) ?>
									<strong>contiene <?php echo count($docs) ?> archivos adjuntos</strong></a>
									<a href="<?php echo get_permalink($post->ID) ?>" class="flotarRight padding1 ubicacion"><strong>ver archivos</strong></a>
								</div>

							</div>
						</div>
						<hr/>		
					</div>
					<?php endforeach ?>

				</div>
				<div class="col-xs-3 listar">
					<h3>Jurisprudencia</h3>
					<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav-eventos' , 'theme_location' => 'menu_sidebar' ) ); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer()?>