<?php
/**
 * Custom HTML5 Functions File
 * @author Stewart Chamberlain
 * @link http://stewartchamberlain.com/tutorials/convert-genesis-child-theme-to-html5/
*/

/**
*  ENQUEUE MODERNIZR (http://modernizr.com/) TO HELP WITH OLDER BROWSER SUPPORT.
*/
add_action( 'wp_enqueue_scripts', 'load_modernizr' );
	function load_modernizr() {
		wp_register_script( 'modernizr', 'http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js', array(), '2.6.2', false );
		wp_enqueue_script( 'modernizr' );
}

/**
 * HTML5 DOCTYPE
*/
remove_action( 'genesis_doctype', 'genesis_do_doctype' );
add_action( 'genesis_doctype', 'html5_do_doctype' );
	function html5_do_doctype() {
?>
<!DOCTYPE html>
<html class="no-js">
<head>
<meta charset=<?php bloginfo( 'charset' ); ?>/>
<?php
}

/**
 * HTML5 OPEN HEADER
*/
remove_action('genesis_header','genesis_header_markup_open', 5);
add_action('genesis_header','html5_open_header', 5);
	function html5_open_header() {
		echo '<header id="header">';
		genesis_structural_wrap( 'header', 'open' );
}

/**
 * HTML5 CLOSE HEADER
*/
remove_action('genesis_header','genesis_header_markup_close', 15);
add_action('genesis_header','html5_close_header', 15);
	function html5_close_header() {
		genesis_structural_wrap( 'header', 'close' );
		echo '</header><!--end #header-->';
 }

/**
 * HTML5 OPEN FOOTER
*/
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
add_action( 'genesis_footer', 'html5_open_footer', 5 );
	function html5_open_footer() {
		echo '<footer id="footer">';
		genesis_structural_wrap( 'footer', 'open' );
}

/**
 * HTML5 CLOSE FOOTER
*/
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );
add_action( 'genesis_footer', 'html5_close_footer', 15 );
	function html5_close_footer() {
		genesis_structural_wrap( 'footer', 'close' );
		echo '</footer><!-- end #footer -->' . "\n";
}

/**
 * HTML5 NAVIGATION
*/
	function html5_nav($nav_out, $nav){
		$nav_out = sprintf( '<nav id="nav" data-role="navbar">%2$s%1$s%3$s</nav>', $nav, genesis_structural_wrap( 'nav', 'open', 0 ),genesis_structural_wrap( 'nav', 'close', 0 ) );
		return $nav_out;
}
add_filter( 'genesis_do_nav', 'html5_nav', 10, 2 );

/**
 * HTML5 SUB NAVIGATION
*/
	function html5_sub_nav($sub_nav_out, $sub_nav){
		$sub_nav_out = sprintf( '<nav id="subnav">%2$s%1$s%3$s</nav>', $sub_nav, genesis_structural_wrap( 'subnav', 'open', 0 ), genesis_structural_wrap( 'subnav', 'close', 0 ) );
		return $sub_nav_out;
}
add_filter( 'genesis_do_subnav', 'html5_sub_nav', 10, 2 );