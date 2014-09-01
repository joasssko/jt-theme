<?php get_header()?>
<div class="box-base marginTop13">
	<div class="prox-eventos container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<div class="row">
			<div class="col-xs-9">
				<h2 class="titulo-eventos">About / <strong><?php $equipo = wp_get_post_terms( $post->ID , 'equipo'); echo  $equipo[0]->name?></strong></h2>
				<div class="row">
				
					<div class="col-md-7">
						<?php echo get_the_post_thumbnail($post->ID , 'directores' , array('class' => 'dire'))?>
					</div>
					<div class="col-md-5">
						<h3 class="normal"><?php echo $post->post_title?></h3>
						<h4 class="normal"><?php echo get_field('cargo')?></h4>
						<h4 class="normal"><a href="mailto:<?php echo get_field('email')?>"><?php echo get_field('email')?></a></h4>
						<ul class="box-link">
							<?php if(get_field('email')){?>
								<li class="current"><a class="current" href="mailto:<?php echo get_field('email')?>"><span class="fa fa-envelope-square"></span></a></li>
							<?php }?>
							<?php if(get_field('twitter')){?>
								<li class="current"><a class="current" href="<?php echo get_field('twitter')?>"><span class="fa fa-twitter-square"></span></a></li>
							<?php }?>
							<?php if(get_field('linkedin')){?>
								<li class="current"><a class="current" href="<?php echo get_field('linkedin')?>"><span class="fa fa-linkedin-square"></span></a></li>
							<?php }?>
						</ul>
					</div>
					
					<div class="clear separator"></div>
				
					<div class="formato">
						<?php the_content()?>
							<?php endwhile; else: ?>
							Sorry, no posts matched your criteria.
						<?php endif; ?>
					</div>
					
					<div class="clear separator"></div>
					
					<?php if($equipo[0]->slug== 'directores' || $equipo[0]->slug == 'investigadores'){?>
						
                        <?php $publicaciones = get_posts(array('post_type' => 'publicaciones' , 'posts_per_page' => '6' , 'meta_query' => array( 
							array(
								'key' => 'autor',
								'value' => $post->ID,
								'compare' => 'LIKE' , 
							))
						))?>
        				
                        <?php if($publicaciones){?>
                        	<div class="col-md-12">
								<h3 class="normal-lato">Publicaciones</h3>
                                <div class="clear separator border"></div>
								<div class="row">
                                	<?php foreach($publicaciones as $publicacion):?>
                                    <?php $terms = wp_get_post_terms($publicacion->ID, 'seccion');
									$accion = get_field('accion' , $publicacion->ID); 
									if($accion == 'Clickout'){ $link = get_field('link_externo' , $publicacion->ID) ;}
									elseif($accion == 'Descargable'){$link = get_field('archivo' , $publicacion->ID) ;}
									else{$link = get_permalink($publicacion->ID);}
									?>
                                    
                                    <?php //var_dump($terms)?>
                                    
									<div class="col-xs-6 box-evento">
                                    	<div class="row">
											<div class="col-xs-2">
                                            	<a href="<?php echo $link?>" <?php if($accion == 'Descargable' || $accion == 'Clickout'){echo 'target="_blank"';}?>><i class="icon-publicacion"></i></a>
                                            </div>
											<div class="col-xs-10  detalle-evento">
												<a href="<?php echo $link?>" <?php if($accion == 'Descargable' || $accion == 'Clickout'){echo 'target="_blank"';}?>><?php echo get_the_title($publicacion->ID)?></a>
											</div>
                                        	<div class="col-xs-12">
												<a href="<?php echo $link?>" <?php if($accion == 'Descargable' || $accion == 'Clickout'){echo 'target="_blank"';}?> class="flotarLeft padding1 ubicacion">
													<strong><?php echo $terms[0]->name?></strong>
                                                </a>
												<a href="<?php echo $link?>" <?php if($accion == 'Descargable' || $accion == 'Clickout'){echo 'target="_blank"';}?> class="flotarRight padding1 ubicacion">
                                                	<strong>seguir leyendo</strong>
                                                </a>
											</div>
                                        </div>	
                                        <div class="clear separator border"></div>	
									</div>
                                    <?php endforeach?>
								</div>
							</div>
                        	<?php }?>
                        
                        
					<?php }?>
				</div>
			</div>

			<div class="col-xs-3">
				<div class="listar">
					<h3><?php the_title()?></h3>
					<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav-eventos' , 'theme_location' => 'menu_sidebar_about' ) ); ?>
				</div>	
			</div>
		</div>
	</div>	
</div> 
<?php get_footer()?>