<?php get_header()?>

<div class="box-base">
	<?php $image = get_field('imagen-top-pagina');
		if( !empty($image) ): ?>
		<img src="<?php echo $image; ?>" />
	<?php endif; ?>
<div class="container prox-eventos "> 	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2 class="titulo-eventos"><span>About</span> <strong>/ <?php the_title()?></strong></h2>
	<div class="row"><!-- row -->
		<div class="col-xs-9 row">
			<?php the_content()?>        
			<?php endwhile; else: ?>
				Sorry, no posts matched your criteria.
			<?php endif; ?>

		</div>

		<div class="col-xs-3">

			<div class="listar"><!-- Listar -->
				<h3>investigación</h3>
				<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav-eventos' , 'theme_location' => 'menu_sidebar' ) ); ?>
			</div><!-- Listar/fin -->

			<h3 class="normal-lato marginTop2">Publicaciones</h3><!-- Publicaciones -->
			<?php $publicaciones = get_posts(array('post_type' => 'publicaciones', 'seccion' => $post->post_name, 'posts_per_page=3') )?>
			<?php foreach ($publicaciones as $publicacion) : ?>

			<div class="paddingTop3 marginBottom1 sub-lista">

				<div>
					<i class="icon-publicacion"></i>
				</div>
				<div class="detalle-evento detalle-colaboradores font-merri">
					<?php echo $publicacion->post_excerpt ?>
				</div>

				<?php if(get_field('accion', $publicacion->ID) == 'Clickout') { ?>
					<a href="<?php echo get_field('link_externo', $publicacion->ID) ?>" class="flotarRight padding1 ubicacion"><strong>Ir a la Publicación</strong></a>
				<?php } elseif (get_field('accion', $publicacion->ID) == 'descargable') { ?>
					<a href="<?php echo get_field('archivo', $publicacion->ID) ?>" class="flotarRight padding1 ubicacion"><strong>Descargar</strong></a>
				<?php } else { ?>
					<a href="<?php echo get_the_permalink( $publicacion->ID) ?>" class="flotarRight padding1 ubicacion"><strong>Leer</strong></a>
				<?php } ?>

			</div>
			<?php endforeach ?><!-- Publicaciones/fin -->

			
		</div>
	</div><!-- row/fin -->

	<div class="row">
		<div class="row marginTop3">

			<div class="col-xs-12">
				<h3 class="normal-lato">investigadores</h3>
				<hr/>
				<?php $investigadores = get_field('investigadores') ?>
				<?php foreach ($investigadores as $investigador) : ?>

				<div class="row marginTop2 marginBottom2">
					<div class="col-xs-2 paddingRight0">
						<a href="<?php echo get_permalink($investigador->ID) ?>"><?php echo get_the_post_thumbnail($investigador->ID, 'investigadores') ?></a>
					</div>
					<div class="col-xs-10">
						<h3 class="normal small"><a href="<?php echo get_permalink($investigador->ID) ?>"><?php echo get_the_title($investigador->ID) ?></a></h3>
						<p><?php echo substr($investigador->post_content, 0, 80) ?>...</p>
					</div>
				</div>
				<hr/>
				<?php endforeach ?>

			</div>

		</div>
	</div>
</div>	
<div class="clear"></div>
<?php get_footer()?>