<?php get_header()?>
<?php
	$queried_object = get_queried_object();
	$taxonomy = $queried_object->taxonomy;
	$term_id = $queried_object->term_id;  
?>

<?php //if queried_object() ?>

<div class="box-base">

	<?php $image = get_field('imagen_superior', $taxonomy . '_' . $term_id);
	if( !empty($image) ): ?>
	<div class="holdertop" style="background-image:url(<?php echo $image; ?>); height:350px; display:block; background-position:top center; background-repeat:no-repeat; background-size:100% auto"></div>
	<?php endif; ?>

	<div class="container">
    	<div class="row prox-eventos">
			<div class="col-xs-9">
	
    		<h2 class="titulo-eventos"><span>PUBLICACIONES</span><strong> / <?php echo $queried_object->name ?></strong></h2>

	

		<?php if($queried_object->slug == 'working-papers') { ?>
        	<div class="row">
            	<?php foreach ($posts as $post): ?>
                	<?php $terms = wp_get_post_terms($post->ID, 'seccion'); 
					$accion = get_field('accion' , $post->ID); 
                    if($accion == 'Clickout'){ $link = get_field('link_externo' , $post->ID) ;}
					elseif($accion == 'Descargable'){$link = get_field('archivo' , $post->ID) ;}
					else{$link = get_permalink($post->ID);}?>
                    <div class="col-xs-6 box-evento">
                        <div class="row">
                        <div class="col-xs-2"><a href="<?php echo $link?>" <?php if($accion == 'Descargable' || $accion == 'Clickout'){echo 'target="_blank"';}?>><i class="icon-publicacion"></i></a></div>
                        <div class="col-xs-10  detalle-evento">
                            <a href="<?php echo $link?>" <?php if($accion == 'Descargable' || $accion == 'Clickout'){echo 'target="_blank"';}?>><?php echo get_the_title($post->ID)?></a>
                        </div>
                        <div class="col-xs-12">
                            <a href="<?php echo $link?>" <?php if($accion == 'Descargable' || $accion == 'Clickout'){echo 'target="_blank"';}?> class="flotarLeft padding1 ubicacion">
                                <strong><?php echo $terms[0]->name?></strong>
                            </a>
                            <a href="<?php echo $link?>" <?php if($accion == 'Descargable' || $accion == 'Clickout'){echo 'target="_blank"';}?> class="flotarRight padding1 ubicacion">
                                <strong><?php if($accion == 'Descargable' || $accion == 'Clickout'){echo 'Ir al documento';}else{echo 'Leer más';}?></strong>
                            </a>
                        </div>
                        </div>	
                        <div class="clear separator border"></div>	
                    </div>
				<?php endforeach;?>
            </div>
		<?php } else if($queried_object->slug == 'opinion') { ?>
			<?php foreach ($posts as $post): ?>
			<div class="row marginTop3 marginBottom3">
				<div class="col-xs-3">
					<a href="<?php echo get_permalink($post->ID) ?>"><?php echo get_the_post_thumbnail($post->ID , 'noticias')?></a>
					<i class="icon-publicacion ico-image"></i>
				</div>
				<div class="col-xs-9 paddingLeft0 paddingRight3">
					<h3 class="titulo-opiniones">
						<a href="<?php echo get_permalink($post->ID) ?>"><?php echo get_the_title($post->ID) ?></a> 
					</h3>
					<p><?php echo substr( $post->post_content  , 0  , 220).'...'?></p>
					<span class="usuario"><i class="icon-usuario"></i> <?php $autores = get_field('autor', $post->ID); echo $autores[0]->post_title; ?></span>
					<a href="<?php echo get_permalink($post->ID) ?>" class="flotarRight seguir-leyendo">SEGUIR LEYENDO</a>
				</div>
                <div class="col-md-12">
                	<div class="separator"></div>
                	<div class="clear separator border"></div>
                </div>
			</div>
			<?php endforeach;?>
		<?php } else if($queried_object->slug == 'documentos') { ?>
			<div class="row">
            	<?php foreach ($posts as $post): ?>
                	<?php 
					$terms = wp_get_post_terms($post->ID, 'seccion');
					$accion = get_field('accion' , $post->ID); 
                    if($accion == 'Clickout'){ $link = get_field('link_externo' , $post->ID) ;}
					elseif($accion == 'Descargable'){$link = get_field('archivo' , $post->ID) ;}
					else{$link = get_permalink($post->ID);}
					?>
                    <div class="col-xs-6 box-evento">
                        <div class="row">
                        <div class="col-xs-2"><a href="<?php echo $link?>" <?php if($accion == 'Descargable' || $accion == 'Clickout'){echo 'target="_blank"';}?>><i class="icon-publicacion"></i></a></div>
                        <div class="col-xs-10  detalle-evento">
                            <a href="<?php echo $link?>" <?php if($accion == 'Descargable' || $accion == 'Clickout'){echo 'target="_blank"';}?>><?php echo get_the_title($post->ID)?></a>
                        </div>
                        <div class="col-xs-12">
                            <a href="<?php echo $link?>" <?php if($accion == 'Descargable' || $accion == 'Clickout'){echo 'target="_blank"';}?> class="flotarLeft padding1 ubicacion">
                                <strong><?php echo $terms[0]->name?></strong>
                            </a>
                            <a href="<?php echo $link?>" <?php if($accion == 'Descargable' || $accion == 'Clickout'){echo 'target="_blank"';}?> class="flotarRight padding1 ubicacion">
                                <strong><?php if($accion == 'Descargable' || $accion == 'Clickout'){echo 'Ir al documento';}else{echo 'Leer más';}?></strong>
                            </a>
                        </div>
                        </div>	
                        <div class="clear separator border"></div>	
                    </div>
                
                <?php endforeach?>
			</div>
		<?php } ?>
		<div class="clear separator"></div>
        <?php wp_paginate()?>
		<div class="clear separator"></div>


		

		
</div>
<div class="col-xs-3 listar">
	<h3>Publicaciones</h3>
	<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav-eventos' , 'theme_location' => 'menu_sidebar_publicaciones' ) ); ?>
</div>
</div>
</div>	
</div> 
<?php get_footer()?>