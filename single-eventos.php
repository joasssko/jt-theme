<?php get_header()?>





<div class="box-base marginTop13">
	<div class="container prox-eventos "> 	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		

		<div class="row">
			
			<div class="col-xs-9">
				<h2 class="titulo-eventos"><strong><?php the_title()?></strong></h2>
				
                <?php $fechayhora = get_field('hora')?>
                
                <div class="row marginTop3 marginBottom3">
					<div class="col-xs-6">
						<iframe src="<?php echo get_field('lugar') ?>" width="375" height="200" frameborder="0" style="border:0"></iframe>
					</div>
					<div class="col-xs-6">
						<h3 class="normal lineHeight23"><?php echo $post->post_excerpt ?></h3>
						<span class="usuario lineHeight23"><i class="icon-usuario"></i> <?php echo get_the_author($post); ?> <?php echo get_field('direccion') ?></span>
						<div class="col-xs-12 lineHeight23">
							<div class="row">

								<a href="<?php echo get_field('programa') ?>" class="flotarLeft seguir-leyendo small"><i class=""></i> DESCARGAR PROGRAMA</a>

								<a class="flotarRight seguir-leyendo small agendar"><i class=""></i> AGENDAR</a>
                                <div class="agenda"></div>
							</div>	
						</div>
						<a href="#;" data-toggle="modal" class="btn btn-danger btn-evento" data-target="#myModal">ASISTIR A EVENTO</a>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
										<h3 class="normal-lato">Formulario de inscripción y descarga de contenidos</h3>
									</div>
									<div class="modal-body">
										<?php echo do_shortcode('[contact-form-7 id="16" title="Contact form 1"]'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-1"></div>
					<div class="col-xs-11 formato">
						<?php the_content()?>        
							<?php endwhile; else: ?>
							Sorry, no posts matched your criteria.
						<?php endif; ?>
					</div>
				</div>
			</div>

			<div class="col-xs-3">
				<h3 class="prox-evento aling">Próximos Eventos</h3>
			</div>

		</div>	
	</div>	
</div>

<script>
      var myCalendar = createCalendar({
        options: {
          class: 'eventhide',
          id: 'my-id'                               // You need to pass an ID. If you don't, one will be generated for you.
        },
        data: {
          title: '<?php echo $post->post_title?>',     // Event title
          start: new Date('<?php echo date('F d\, Y H\:i' , $fechayhora)?>'),   // Event start date
          duration: 60,                            // Event duration (IN MINUTES)
          end: new Date('<?php echo date('F d\, Y H\:i' , $fechayhora)?>'),     // You can also choose to set an end time.
                                                    // If an end time is set, this will take precedence over duration
          address: '<?php echo get_field('direccion')?>',
          description: '<?php echo $post->post_excerpt?>'
        }
      });

      document.querySelector('.agenda').appendChild(myCalendar);
	  
	  jQuery('.agendar').click(function(event) {
		jQuery('.agenda').slideToggle('fast')
	});
	  
</script>

<?php get_footer()?>