<?php
/*
Template Name: Lineas Investigación
*/
?>
<?php get_header()?>

<div class="box-base">
	<?php $image = get_field('imagen-top-pagina');
		if( !empty($image) ): ?>
		<img src="<?php echo $image; ?>" />
	<?php endif; ?>
<div class="container prox-eventos "> 	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	
	<div class="row"><!-- row -->
    <div class="clear separator"></div>
		<div class="col-xs-9">
        
        	<h2 class="titulo-eventos"><span>INVESTIGACIÓN</span> <strong>/ <?php the_title()?></strong></h2>
        	
            <div class="row">
            	<div class="formato">
					<?php the_content()?> 
                </div>       
				<?php endwhile; else: ?>
                    Sorry, no posts matched your criteria.
                <?php endif; ?>
			</div>
		</div>

		<div class="col-xs-3">

			<h2 class="titulo-eventos"><strong>&nbsp;</strong></h2>
				<div class="listar">
					<!--<h3><?php the_title()?></h3> -->
                    
					<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav-eventos' , 'menu' => 'Investigacion' ) ); ?>
                    
                    
				</div>	

			<h3 class="normal-lato marginTop2">Publicaciones</h3><!-- Publicaciones -->
			<?php $publicaciones = get_posts(array('post_type' => 'publicaciones', 'seccion' => $post->post_name, 'posts_per_page=3') );?>
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
			<?php endforeach ;?><!-- Publicaciones/fin -->

			
		</div>
	</div><!-- row/fin -->
	<div class="clear separator"></div>
	<div class="row">
		
		<div class="col-xs-9">
        	<div class="row">
            <div class="col-xs-6">
                <h3 class="normal-lato">investigadores</h3>
				<div class="clear border separator"></div>
                <?php $investigadores = get_field('investigadores' , $post->ID); ?>
                
                <?php foreach($investigadores as $investigador) : ?>

                <div class="marginTop2 marginBottom2">
                    
                        <a href="<?php echo get_permalink($investigador->ID) ?>"><?php echo get_the_post_thumbnail($investigador->ID, 'thumbnail' , array('class' => 'alignleft invv')) ?></a>
                    
                        <h3 class="normal "><a href="<?php echo get_permalink($investigador->ID) ?>"><?php echo get_the_title($investigador->ID) ?></a></h3>
                        <p><?php echo substr($investigador->post_content, 0, 80) ?>...</p>
                		<div class="clear"></div>
                        <a href="<?php echo get_permalink($investigador->ID)?>" class="der seguir-leyendo">ver perfil</a>
                        <div class="clear separator border"></div>  
                </div>
            <?php endforeach ?>

            </div>

            <div class="col-xs-6">
                <h3 class="normal-lato">colaboradores</h3>
                <div class="clear border separator"></div>
                <?php $colaboradores = get_field('colaboradores'); ?>
                <?php foreach($colaboradores as $colaborador) : ?>

                <div class="marginTop2 marginBottom2">
                    
                        <a href="<?php echo get_permalink($colaborador->ID) ?>"><?php echo get_the_post_thumbnail($colaborador->ID, 'thumbnail' , array('class' => 'alignleft invv')) ?></a>
                    
                        <h3 class="normal "><a href="<?php echo get_permalink($colaborador->ID) ?>"><?php echo get_the_title($colaborador->ID) ?></a></h3>
                        <p><?php echo substr($colaborador->post_content, 0, 80) ?>...</p>
               			<div class="clear"></div>
                        <a href="<?php echo get_permalink($colaborador->ID)?>" class="der seguir-leyendo">ver perfil</a>
                        <div class="clear separator border"></div>   
                </div>
                <?php endforeach ?>
			</div>
            </div>
        </div>
		<div class="col-xs-3">
        	<h3 class="normal-lato">Jurisprudencia</h3>
            <div class="clear border separator"></div>
			<div class="regulacion gris-claro marginTop3"><!-- Regulacion -->
				
				
				<ul>
					<?php $jurisprudencias = get_posts(array('post_type' => 'jurisprudencia', 'seccion' => $post->post_name, 'posts_per_page'=>'4') )?>
					<?php foreach ($jurisprudencias as $jurisprudencia) : ?>
					<li><a href="<?php echo get_the_permalink( $jurisprudencia->ID) ?>">
						<i class="icon-documento"></i>
						<h4><?php echo $publicacion->post_excerpt ?></h4>
					</a></li>
					<?php endforeach ?>
				</ul>
			</div><!-- Regulacion/fin -->
		</div>
	</div>
</div>	
<div class="clear"></div>
<?php get_footer()?>