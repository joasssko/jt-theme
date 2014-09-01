<?php get_header()?>

<div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- Carrusel -->
	<ol class="carousel-indicators indicadores">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1" class=""></li>
		<li data-target="#myCarousel" data-slide-to="2" class=""></li>
	</ol>
	<div class="carousel-inner">
		<?php $slides = get_posts(array('post_type' => 'slider', 'posts_per_page' => 3 ))?>
		<?php $slidecount=0 ?>
		<?php foreach ($slides as $slide) { ?>
		<?php $slidecount++ ?>
		<div class="item <?php if($slidecount==1){echo 'active';} elseif ($slidecount==2){echo 'next';} else {} ?>">
			<?php echo get_the_post_thumbnail($slide->ID,'full') ?>
			<div class="container">
				<div class="info-destacada">
					<h1><?php echo get_the_title($slide->ID) ?></h1>
					<p><?php echo $slide->post_excerpt ?></p>
				</div>
			</div>  
		</div>

		<?php } ?>

	</div>
</div><!-- Carrusel / fin -->

<div class="container"><!-- Container -->
	<h2 class="index-title">Líneas de investigación</h2>
	<div class="row">
		
        <?php $lineas = get_posts(array('post_type' => 'page' , 'post_parent' => 17))?>
            <?php foreach($lineas as $linea):?>
                
                
                   <div class="col-cinco">
                        <h3><a href="<?php echo get_the_permalink($linea->ID)?>"><?php echo $linea->post_title;?></a></h3>
                        <p><a href="<?php echo get_the_permalink($linea->ID)?>"><?php echo substr($linea->post_excerpt , 0 , 100) ;?></a></p>
                        <div class="clear separator"></div>	
                    </div>
                    			
              
              
            <?php endforeach?>
            
        
		
	</div>
</div><!-- Container/fin -->

<div class="pub-destacadas">
	<div class="container">
		<h2 class="index-title">Publicaciones</h2>
		<div class="row">
			
            <?php $pubs = get_posts(array('post_type'=> 'publicaciones' , 'numberposts' => 3 , 'tipo' => 'opinion'))?>
            <?php foreach($pubs as $pub):?>
            <div class="col-md-4">
				<h3><i class="icon-publicacion"></i> <a href="<?php echo get_permalink($pub->ID)?>"><?php echo get_the_title( $pub->ID )?></a></h3>
				<p><a href="<?php echo get_permalink($pub->ID)?>"><?php echo substr($pub->post_content , 0 , 130)?></a></p>
                <?php $autor = get_field('autor' , $pub->ID)?>
				<span class="usuario"><i class="icon-usuario"></i> <?php echo $autor[0]->post_title?></span>
				<a href="<?php echo get_permalink($pub->ID)?>" class="flotarRight seguir-leyendo">SEGUIR LEYENDO</a>
				<div class="clear border separator"></div>
			</div>
			<?php endforeach?>
		</div>
	</div>	
</div>

<div class="prox-eventos">
	<div class="container">
		<h2 class="index-title">Próximos eventos</h2>
		<div class="row">
			
            <?php $eventos = get_posts(array('post_type'=> 'eventos' , 'numberposts' => 3 ))?>
            <?php foreach($eventos as $evento):?>
            <div class="col-xs-4">
            	<div class="clear separator"></div>
            	<div class="col-xs-2 box-rojo">
					<?php
                        $day = "d";
                        $mes = "M";
                        $unixtimestamp = strtotime(get_field('hora' , $evento->ID));							 
                    ?>
                    <?php $date = DateTime::createFromFormat('Ymd', get_field('hora', $evento->ID));
                    echo  date('d' , get_field('hora', $evento->ID))?>
                    <span><?php echo date_i18n($mes, $unixtimestamp); ?></span>
				</div>
				<div class="col-xs-10 detalle-evento">
					<a href="<?php echo get_the_permalink($evento->ID)?>"><?php echo get_the_title($evento->ID)?> - <?php echo $evento->post_excerpt?></a>
				</div>
                <div class="clear"></div>
				
						<a href="<?php echo get_permalink($evento->ID) ?>" class="flotarLeft padding1 ubicacion seguir-leyendo"><i class="icon-ubicacion"></i><strong>Facultad de derecho UDP</strong></a>
						<a href="<?php echo get_permalink($evento->ID) ?>" class="flotarRight padding1 ubicacion seguir-leyendo"><strong>SEGUIR LEYENDO</strong></a>
                <div class="clear border separator"></div>
			</div>
			<?php endforeach;?>
            <div class="clear separator"></div>
		</div>
	</div>	
</div>

<?php get_footer()?>