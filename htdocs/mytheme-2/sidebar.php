<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mytheme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php dynamic_sidebar( 'Footer' ); ?>
	<?php dynamic_sidebar( 'Footer-1' ); ?>
	<?php dynamic_sidebar( 'Footer-2' ); ?>
	<?php dynamic_sidebar( 'Footer-3' ); ?>


</aside><!-- #secondary -->
