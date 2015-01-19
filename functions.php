<?php
function cambiar_final_extracto(){

return '<a title="Continua Leyendo" href="'.get_permalink().'" rel="nofollow"> ver más...</a>';

}
add_filter('excerpt_more','cambiar_final_extracto');

function largo_extracto($length){

	return 50;

}
add_filter('excerpt_length','largo_extracto');


function my_custom_init() {
add_post_type_support( 'page', 'excerpt' );

}

add_action('init', 'my_custom_init');

?>

<?php function favicon() { ?>
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<?php }
add_action('wp_head', 'favicon');
?>