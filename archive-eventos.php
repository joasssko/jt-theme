<?php get_header()?>
<div class="box-base marginTop13">
	<div class="container">
		<div class="row prox-eventos">
			<div class="col-xs-9">	
            	<h2 class="marginBottom1 titulo-eventos">PRÓXIMOS EVENTOS</h2>	
				<div class="row">
				<?php foreach ($posts as $post): ?>

				<div class="col-xs-6 box-evento">
					<div class="row">
						<div class="col-xs-2">
                        	<div class="box-rojo">
								<?php
                                    $day = "d";
                                    $mes = "M";
                                    $unixtimestamp = strtotime(get_field('hora'));							 
                                ?>
								<?php $date = DateTime::createFromFormat('Ymd', get_field('hora'));
                                echo  date('d' , get_field('hora'))?>
                                <span><?php echo date_i18n($mes, $unixtimestamp); ?></span>
                            </div>
						</div>
						<div class="col-xs-10 detalle-evento">
							<?php echo get_the_excerpt($post->ID) ?>
						</div>
						<i class="icon-ubicacion"></i>
						<a href="<?php echo get_permalink($post->ID) ?>" class="flotarLeft padding1 ubicacion"><strong>Facultad de derecho UDP</strong></a>
						<a href="<?php echo get_permalink($post->ID) ?>" class="flotarRight padding1 ubicacion"><strong>SEGUIR LEYENDO</strong></a>
					</div>
					<div class="clear border separator"></div>
				</div>

				<?php endforeach ?>
			</div>
        </div>

        <div class="col-xs-3">

            <div class="listar">
                <h3>About</h3>
                <?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav-eventos' , 'theme_location' => 'menu_sidebar_about' ) ); ?>
            </div>

        </div>

		</div>

	</div>	

</div> 
<?php get_footer()?>