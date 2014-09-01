<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title><?php wp_title(); ?></title>
	<!-- base -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.css" type="text/css" media="screen" />
	<!-- fonts -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic,300italic,300,700,700italic' rel='stylesheet' type='text/css'>
	<!-- styles -->	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
	
	<?php wp_head()?>

	<!-- scripts -->
	<?php call_scripts()?>
    
    <div id="fb-root"></div>
<script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1565646396997995&version=v2.0";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script> 
  
<?php if(is_single() || get_post_type($post) == 'evento'){?>
	<script type="text/javascript" src="<?php echo get_bloginfo('template_directory')?>/assets/js/ouical.js"></script>
<?php }?>

</head>
<body <?php body_class();?>>

	<div class="navbar-fixed-top"><!-- Nav -->
		
		<div class="box-titulo"></div>

		<header>
			<div class="container">
				<h1 class="titulo flotarLeft"><!-- Titulo -->
					<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
				</h1><!-- Titulo / fin -->
				<form role="search" method="get" class="search-form form-inline flotarRight" action="<?php echo home_url( '/' ); ?>"><!-- Search -->
					<div class="form-group has-feedback">
						<label class="sr-only" for="exampleInputEmail2">Buscar</label>
						<input type="search" class="search-field form-control buscar" placeholder="buscar" value="" name="s" />
						<span class="glyphicon glyphicon-search form-control-feedback leftZero"></span>
					</div>
				</form><!-- Search / fin -->
			</div>				
		</header>

		<div class="box-nav">
			<div class="container">
				<div class="menu"><!-- incio menu -->
					<?php //llama al menu registrado desde el functions ?>         
					<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'navbar-left' , 'theme_location' => 'primary' ) ); ?>
					<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'navbar-right' , 'theme_location' => 'secondary' ) ); ?>
				</div>
			</div>	
		</div>

	</div><!-- Nav / fin -->

