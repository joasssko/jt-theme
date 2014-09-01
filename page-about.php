<?php
/*
Template Name: Page About
*/
?>
<?php get_header()?>
<div class="box-base marginTop13">
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
					<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav-eventos' , 'menu' => 'about' ) ); ?>
				</div>	
				
                <div class="clear separator"></div>
                
                <h3 class="prox-evento">Próximos Eventos</h3>
                <div class="marginTop3 marginBottom1 sub-lista">
                    <div class="box-rojo">
                        15 <span>Abr</span>
                    </div>
                    <div class="detalle-evento detalle-directores">
                        <a href="">“El fin de los clubes cerrados: Cómo reducir la segregación escolar en Chile”</a>
                    </div>
                    <a href="#;" class="flotarRight padding1 ubicacion"><strong>Ver Eventos</strong></a>
                </div>
                
			</div>
		</div>
	</div>	
</div> 
<?php get_footer()?>