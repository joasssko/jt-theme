<?php get_header()?>
<?php 
	$var = get_queried_object();
	$taxo = $var->taxonomy;
	$seccion = $var->slug;
	$seccionID = $var->term_id;
?>



<div class="box-base">
	<img src="<?php bloginfo('template_directory');?>/assets/img/galeria/top-investigacion.jpg" alt="">
	<div class="prox-eventos container">		            
		<div class="row">
			<div class="col-xs-9">
               <h2 class="marginBottom1 titulo-eventos"><span>Jurisprudencia</span> <strong>/ <?php echo $var->name?></strong></h2>
               <div class="row">
                   	<?php foreach ($posts as $post) : ?>
					<div class="col-xs-6 marginTop2">
						<div class="row">
							<div class="col-xs-2">
                            	<a href="<?php echo get_the_permalink()?>"><i class="icon-documento"></i></a>
                            </div>
							<div class="col-xs-10 detalle-evento">
                            	<a href="<?php echo get_permalink($post->ID) ?>"><?php echo get_the_title($post->ID) ?></a>
                           	</div>
                            <div class="col-xs-12">
                                <a href="<?php echo get_permalink($post->ID) ?>" class="flotarLeft padding1 ubicacion">
                                <?php $docs = get_field('documentos',$post->ID) ?>
                                <strong>contiene <?php echo count($docs) ?> archivos adjuntos</strong></a>
                                <a href="<?php echo get_permalink($post->ID) ?>" class="flotarRight padding1 ubicacion">
                                	<strong>ver archivos</strong>
                                </a>
							</div>
                            <div class="col-md-12">
                            	<div class="clear separator border"></div>
                            </div>
                            	
						</div>
					</div>
					<?php endforeach ?>
					<div class="clear separator"></div>
					<?php wp_paginate()?>
                    <div class="clear separator"></div>
				</div>
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