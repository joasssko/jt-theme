<div class="footer"><!-- footer -->

		<div class="container"><!-- container -->
			<div class="row"><!-- row -->
            
            	<div class="col-md-9">
                	<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'navbar-left footermenu' , 'theme_location' => 'primary' ) ); ?>
                </div>
            	<div class="col-md-3">
                	<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'navbar-right footermenu' , 'theme_location' => 'secondary' ) ); ?>
                </div>
            
				<!--<div class="columnas-footer-uno">
					<ul>
						<li><a href="#;">Inicio</a></li>
					</ul>
				</div>
				<div class="columnas-footer-dos">
					<ul>
						<li><a href="#;">About</a></li>
						<li><a href="#;">Misión y visión</a></li>
						<li><a href="#;">Staff</a></li>
						<li><a href="#;">Carreras</a></li>
						<li><a href="#;">Financiamiento</a></li>
					</ul>
				</div>
				<div class="columnas-footer-tres">
					<ul>
						<li><a href="#;">Investigación</a></li>
						<li><a href="#;">Diseño institucional</a></li>
						<li><a href="#;">Consumidores y libre competencia</a></li>
						<li><a href="#;">Regulación económica</a></li>
						<li><a href="#;">Recursos naturales</a></li>
						<li><a href="#;">Gobiernos corporativos</a></li>
					</ul>
				</div>
				<div class="columnas-footer-cuatro">
					<ul>
						<li><a href="#;">Publicaciones</a></li>
						<li><a href="#;">Documentos</a></li>
						<li><a href="#;">Opinión</a></li>
						<li><a href="#;">Regulación económica</a></li>
					</ul>
				</div>
				<div class="columnas-footer-cinco">
					<ul>
						<li><a href="#;">JURISPRUDENCIA</a></li>
					</ul>
				</div>
				<div class="columnas-footer-seis">
					<ul>
						<li><a href="#;">Eventos</a></li>
					</ul>
				</div>
				<div class="columnas-footer-siete">
					<ul>
						<li><a href="#;">Noticias</a></li>
					</ul>
				</div>
				<div class="columnas-footer-ocho">
					<ul>
						<li><a href="#;">Contacto</a></li>
					</ul>
				</div> -->
			</div><!-- row / fin -->
		</div><!-- container / fin -->

		<div class="container"><!-- container -->
			<div class="row"><!-- row -->
				<div class="col-xs-3">
					<strong>Universidad Diego Portales</strong>
					Manuel Rodríguez Sur 415, Santiago, Chile<br/>
					Fono: (+56 2) 267 62 000
				</div>
				<div class="col-xs-3">
					<strong>Facultad de Derecho</strong>
					Av. República 105, Santiago, Chile<br/>
					Fono: (+56 2) 267 62 601
				</div>
				<div class="col-xs-6">
					<div class="nota-programa">
						Programa de gobierno, derecho y mercados
					</div>
					<div class="logo-udp-footer"><img src="<?php bloginfo('template_directory')?>/assets/img/logo-udp-gris.png" alt="" /></div>
				</div>
			</div><!-- row / fin -->
		</div><!-- container / fin -->

	</div><!-- footer / fin -->

</body>

<?php wp_footer()?>
</html>