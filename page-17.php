<?php get_header()?>
<div class="box-base">
	<?php $image = get_field('imagen-top-pagina');
 		if( !empty($image) ): ?>
 		<img src="<?php echo $image; ?>" />
 	<?php endif; ?>
	<div class="container">
		<h2 class="titulo-eventos"><?php the_title()?></h2>
		
        <div class="row">
        
        	<?php $lineas = get_posts(array('post_type' => 'page' , 'post_parent' => 17))?>
            <?php foreach($lineas as $linea):?>
                <div class="col-xs-4">
                   <a href="<?php echo get_permalink($linea->ID)?>"><?php echo get_the_post_thumbnail($linea->ID ,'directores' )?></a>
                    <h3><i class="icon-carpeta"></i> <?php echo $linea->post_title?></h3>
                    <p><?php echo $linea->post_excerpt?></p>	
                    <a href="<?php echo get_permalink($linea->ID)?>" class="flotarRight seguir-leyendo">SEGUIR LEYENDO</a>
                    <div class="clear separator"></div>				
                </div>
            <?php endforeach?>
        </div>          
	</div>	
</div> 
<?php get_footer()?>