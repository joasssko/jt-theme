<?php get_header()?>

<div class="box-base marginTop13">
	<div class="container prox-eventos "> 	
    	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-xs-9 marginTop2">
        	<h2 class="titulo-eventos"><span>JURISPRUDENCIA</span> <strong>/ <?php the_title()?></strong></h2>
			<div class="row">
				<div class="formato">
					<?php the_content()?>        
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
                	<div class="gris-claro">
                        <h3 class="normal paddingTop1">listado de documentos adjuntos</h3>
                        <span class="flotarRight small">SELECCIONE UNO PARA VER DETALLE Y DESCARGAR</span>
                        <?php $documentos = get_field('documentos')?>
                        
                        <ul>
                            <?php foreach ($documentos as $documento) : ?>
                            <li>
                                <a href="<?php echo $documento['archivo'] ?>">
                                    <i class="icon-documento"></i> 
                                    <h4><?php echo $documento['nombre'] ?></h4> 
                                    <span><?php echo $documento['descripcion'] ?></span>
                                </a>
                            </li>
                        	<?php endforeach ?>
                        </ul>
                    </div>
                </div>
			</div>
		</div>
		  <?php endwhile; else: ?>
          Sorry, no posts matched your criteria.
          <?php endif; ?>
		<div class="col-xs-3 listar rojo-carmesi marginTop2">
			<h3>Jurisprudencia</h3>
			<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav-eventos' , 'theme_location' => 'menu_sidebar' ) ); ?>
		</div>
		
	</div>
</div>	

<?php get_footer()?>