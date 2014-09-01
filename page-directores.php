<?php
/*
Template Name: Directores	
*/
?>
<?php get_header()?>

<div class="box-base">
	<?php $image = get_field('imagen-top-pagina');
	if( !empty($image) ): ?>
	<div class="holdertop" style="background-image:url(<?php echo $image; ?>); height:350px; display:block; background-position:top center; background-repeat:no-repeat; background-size:100% auto"></div>
	<?php endif; ?>
	<div class="container prox-eventos "> 	
		<div class="row"><!-- row -->
        <div class="clear separator"></div>
			<div class="col-xs-9">
				
				<h2 class="titulo-eventos"><span>About</span> <strong>/ <?php the_title()?></strong></h2>	
				<div class="row">
				
				
				
				<?php if(is_page(188)){?>
				<?php $directores = get_posts(array('post_type' => 'directorio', 'equipo' => 'directores' , 'numberposts' => 10 ) )?>
				<?php foreach ($directores as $director): ?>
					<div class="col-xs-6 marginTop2">

						<a href="<?php echo get_the_permalink($director->ID)?>"><?php echo get_the_post_thumbnail($director->ID , 'directores')?></a>
						<h3 class="directores"><a href="<?php echo get_the_permalink($director->ID)?>"><?php echo get_the_title($director) ?></a></h3>
						<h4 class="directores"><?php echo get_field('cargo' , $director->ID) ?></h4>
						<ul class="box-link black posicion">
							<?php if(get_field('email' , $director->ID)){?>
								<li class="current"><a class="current" href="mailto:<?php echo get_field('email' , $director->ID)?>"><span class="fa fa-envelope-square"></span></a></li>
							<?php }?>
							<?php if(get_field('twitter' , $director->ID)){?>
								<li class="current"><a class="current" href="<?php echo get_field('twitter' , $director->ID)?>"><span class="fa fa-twitter-square"></span></a></li>
							<?php }?>
							<?php if(get_field('linkedin' , $director->ID)){?>
								<li class="current"><a class="current" href="<?php echo get_field('linkedin' , $director->ID)?>"><span class="fa fa-linkedin-square"></span></a></li>
							<?php }?>
						</ul>
					</div>
					<?php endforeach ?>
				</div>
				<?php }elseif(is_page(205)){?>
				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
				<?php $colaboradores = query_posts(array('post_type' => 'directorio', 'equipo' => 'colaboradores' , 'paged' => $paged) )?>
				<?php foreach ($colaboradores as $colaborador): ?>
					<div class="col-xs-6 marginTop2">
						<a href="<?php echo get_the_permalink($colaborador->ID)?>"><?php echo get_the_post_thumbnail($colaborador->ID ,'colaboradores' , array('class' => 'alignleft'))?></a>
						<div>	
							<h3 class="normal"><?php echo get_the_title($colaborador->ID)?></h3>
							<p>Antropólogo. Investigador titular del Núcleo de Investigación en Estudios Interétnicos e Interculturales (NEII) de la Universidad Católica de Temuco.</p>
						</div>
					</div>
				<?php endforeach ?>
				</div>
				<?php }elseif(is_page(208)){?>
                	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
				<?php $colaboradores = query_posts(array('post_type' => 'directorio', 'equipo' => 'investigadores' , 'paged' => $paged) )?>
				<?php foreach ($colaboradores as $colaborador): ?>
					<div class="col-xs-6 marginTop2">
						<a href="<?php echo get_the_permalink($colaborador->ID)?>"><?php echo get_the_post_thumbnail($colaborador->ID ,'colaboradores' , array('class' => 'alignleft'))?></a>
						<div>	
							<h3 class="normal"><?php echo get_the_title($colaborador->ID)?></h3>
							<p>Antropólogo. Investigador titular del Núcleo de Investigación en Estudios Interétnicos e Interculturales (NEII) de la Universidad Católica de Temuco.</p>
						</div>
					</div>
				<?php endforeach ?>
				</div>
                <?php }?>
                
				<div class="clear separator"></div>
				<?php wp_paginate();?>
				<div class="clear separator"></div>
				
			</div>

			<div class="col-xs-3">

				<h2 class="titulo-eventos"><strong>&nbsp;</strong></h2>
				<div class="listar">
					<!--<h3><?php the_title()?></h3> -->
                    
					<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav-eventos' , 'menu' => 'About' ) ); ?>
                    
                    
				</div>

							
			</div>
		</div><!-- row/fin -->

	</div>
</div>
	
<?php get_footer()?>