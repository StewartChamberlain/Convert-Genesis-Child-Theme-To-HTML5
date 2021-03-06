<?php
/**
 * HTML5 Primary Sidebar
 * @author Stewart Chamberlain
 * @link http://stewartchamberlain.com/tutorials/convert-genesis-child-theme-to-html5/
*/
?>
<aside id="sidebar" class="sidebar widget-area">
<?php
    genesis_structural_wrap( 'sidebar' );
    do_action( 'genesis_before_sidebar_widget_area' );
    do_action( 'genesis_sidebar' );
    do_action( 'genesis_after_sidebar_widget_area' );
    genesis_structural_wrap( 'sidebar', 'close' );
?>
</aside>