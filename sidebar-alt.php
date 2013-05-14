<?php
/**
 * HTML5 Secondary Sidebar
 * @author Stewart Chamberlain
 * @link http://stewartchamberlain.com/tutorials/convert-genesis-child-theme-to-html5/
*/
?>
<aside id="sidebar-alt" class="sidebar widget-area">
<?php
    genesis_structural_wrap( 'sidebar-alt' );
    do_action( 'genesis_before_sidebar_alt_widget_area' );
    do_action( 'genesis_sidebar_alt' );
    do_action( 'genesis_after_sidebar_alt_widget_area' );
    genesis_structural_wrap( 'sidebar-alt', 'close' );
?>
</aside>