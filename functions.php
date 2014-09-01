<?php 
add_post_type_support('page', 'excerpt');
if ( function_exists('add_theme_support') ) {
add_theme_support('post-thumbnails');
add_image_size('directores', 375, 186, true );
add_image_size('colaboradores', 80, 95, true );
add_image_size('slider', 1400, 610, true );
add_image_size('top-page', 755, 280, true );
add_image_size('noticias', 172, 134, true );
};

function register_my_menu() {
	register_nav_menu( 'primary', 'Menú principal');
	register_nav_menu( 'secondary', 'Menú secundario');
	register_nav_menu( 'menu_sidebar', 'Menú sidebar');
	register_nav_menu( 'menu_sidebar_publicaciones', 'Menú Sidebar Publicaciones');
	register_nav_menu( 'menu_sidebar_about', 'Menú Sidebar About');	
}

add_action( 'init', 'register_my_menu' );
/* Remove auto DIV container on WP Menus */
function my_wp_nav_menu_args( $args = '' )
{
	$args['container'] = false;
	return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );
?>
<?php
/*********** Registra jQuery y el archivo core.js y los carga automáticamente en el theme mediante la funcion call_scripts() bajo el hook wp_head() *******************/
function import_scripts() {
	wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-1.8.3.js');
	wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js');
	wp_register_script('core', get_template_directory_uri() . '/assets/js/core.js');
}
add_action('wp_print_scripts', 'import_scripts');
function call_scripts() {
	wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-1.8.3.js');
	wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js');
	wp_register_script('core', get_template_directory_uri() . '/assets/js/core.js');
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap');
	wp_enqueue_script('core');
}    
add_action('wp_enqueue_scripts', 'call_scripts');


add_action('init', 'slider_register');
function slider_register() {
	$args = array(
		'label' => 'Sliders',
		'singular_label' => 'Slider',
		'public' => true,
		'_builtin' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array( 'slug' => 'slider'),
		'supports' => array('title', 'thumbnail', 'excerpt' )
	);
	register_post_type('slider', $args);
	flush_rewrite_rules();
}

add_action('init', 'directorio_register');
function directorio_register() {
	$args = array(
		'label' => 'Staff',
		'singular_label' => 'Staff',
		'public' => true,
		'_builtin' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array( 'slug' => 'staff'),
		'supports' => array('title', 'thumbnail', 'excerpt', 'editor' )
	);
	register_post_type('directorio', $args);
	flush_rewrite_rules();
}

register_taxonomy("equipo", array("directorio"), array("hierarchical" => true, "label" => 'Equipo', "singular_label" => "Equipo", "rewrite" => true));


add_action('init', 'publicaciones_register');
function publicaciones_register() {
	$args = array(
		'label' => 'Publicaciones',
		'singular_label' => 'Publicacion',
		'public' => true,
		'_builtin' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'rewrite' => array( 'slug' => 'publicaciones'),
		'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'author', 'revisions' )
	);
	register_post_type('publicaciones', $args);
	flush_rewrite_rules();
}

register_taxonomy("tipo", array("publicaciones"), array("hierarchical" => true, "label" => 'Tipo', "singular_label" => "Tipo", "rewrite" => true));
register_taxonomy("seccion", array('publicaciones', 'jurisprudencia'), array("hierarchical" => true, "label" => 'Seccion', "singular_label" => "Seccion", "rewrite" => true));

add_action('init', 'jurisprudencia_register');
function jurisprudencia_register() {
	$args = array(
		'label' => 'Jurisprudencia',
		'singular_label' => 'Articulo',
		'public' => true,
		'_builtin' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'rewrite' => array( 'slug' => 'jurisprudencia'),
		'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'author', 'revisions' )
	);
	register_post_type('jurisprudencia', $args);
	flush_rewrite_rules();
}


add_action('init', 'eventos_register');
function eventos_register() {
	$args = array(
		'label' => 'Eventos',
		'singular_label' => 'Evento',
		'public' => true,
		'_builtin' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'rewrite' => array( 'slug' => 'eventos'),
		'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'author', 'revisions' )
	);
	register_post_type('eventos', $args);
	flush_rewrite_rules();
}


add_action('init', 'partners_register');
function partners_register() {
	$args = array(
		'label' => 'Partners',
		'singular_label' => 'Alianza',
		'public' => true,
		'_builtin' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'has_archive' => true,
		'rewrite' => array( 'slug' => 'about/partners'),
		'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'author', 'revisions' )
	);
	register_post_type('partners', $args);
	flush_rewrite_rules();
}

function show_detalle( $atts ){
   $detalle_details="";
   // get attibutes and set defaults
		extract(shortcode_atts(array(
				'p_regulacion' => 'No especificado',
				'span_regulacion' => 'No especificado',
				'date' => 0
	   ), $atts));
	// Display info 
	$detalle_details = '</div><div class="clear"></div><div class="col-md-12"><div class="detalle marginBottom3">';
	$detalle_details .= '<p class="regulacion">' .$p_regulacion. '</p>';
	$detalle_details .= '<span class="regulacion"> ' .$span_regulacion. '</span>';
	$detalle_details .= '</div></div><div class="clear"></div><div class="formato">';
	return $detalle_details;
}
//add our shortcode detalle
add_shortcode('detalle', 'show_detalle');
//add_action( 'init', 'register_shortcodes');


/*********** Registra los Sidebars y activa el administrador de Widgets*******************/
 register_sidebar(array(
  'name' => 'Home',
  'id' => 'home',
  'description' => 'Widgets en esta área se mostrarán en el sidebar',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
)); 

add_filter('widget_text', 'do_shortcode');

?>
<?php 
if ( ! function_exists( 'twentyten_comment' ) ) :
function twentyten_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>" class="clearfix">
			<div class="comment-author vcard">
				<?php echo get_avatar( $comment, 60 ); ?>
				<em><?php printf( __( '%s <span class="says"> comentó:</span>', 'twentyten' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?></em>
			</div><!-- .comment-author .vcard -->
			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentyten' ); ?></em>
				<br />
			<?php endif; ?>

			<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
				<?php
					/* translators: 1: date, 2: time */
					printf( __( '%1$s at %2$s', 'twentyten' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' );
				?>
			</div><!-- .comment-meta .commentmetadata -->

			<div class="comment-body"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'twentyten' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

?>