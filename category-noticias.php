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
	
    <h2 class="titulo-eventos"><strong><?php echo $queried_object->name ?></strong></h2>

	

	
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
					<div class="clear"></div>
					<a href="<?php echo get_permalink($post->ID) ?>" class="flotarRight seguir-leyendo">SEGUIR LEYENDO</a>
				</div>
                <div class="col-md-12">
                	<div class="separator"></div>
                	<div class="clear separator border"></div>
                </div>
			</div>
			<?php endforeach;?>
		
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