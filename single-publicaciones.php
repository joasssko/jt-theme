<?php get_header()?>

<div class="box-base marginTop13">
	<div class="container prox-eventos "> 	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<div class="col-xs-9">
                <h2 class="titulo-eventos"><?php the_title()?></h2>
                	<div class="row">
                        <div class="col-md-9">
                            <?php $autores = get_field('autor'); ?>
                            Autor(es): <span><?php foreach($autores as $autor): echo '<a href="'.get_permalink($autor->ID).'">'.$autor->post_title.'</a> - '; endforeach;?></span>
                        </div>
                        <div class="col-md-3">
                            <div class="share">
                            
                                <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
                                
                                <a href="https://twitter.com/share" class="twitter-share-button" data-related="jasoncosta" data-lang="en" data-size="small" data-count="none">Tweet</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                
                            </div>
                        </div>
                    <div class="col-md-12"><div class="border separator clear"></div></div>
                    
                    <?php if(get_field('colaborador')){?>
                    <?php $autores = get_field('colaborador'); ?>
                    	<div class="col-md-12">
                            <small>Colaborador(es): <span><?php foreach($autores as $autor): echo '<a href="'.get_permalink($autor->ID).'">'.$autor->post_title.'</a> - '; endforeach;?></span></small>
                        </div>
                    <div class="col-md-12"><div class="border separator clear"></div></div>
                    <?php }?>
                    <div class="clear separator"></div>
                    <div class="formato">
                        <?php the_content()?>
                    </div>
                </div>
			</div>
			<div class="col-xs-3">

			</div>
		</div>
		<?php endwhile; else: ?>
            Sorry, no posts matched your criteria.
        <?php endif; ?>

		
	</div>
</div>	

<?php get_footer()?>