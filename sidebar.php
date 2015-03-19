<?php
/**
 * 	This is the sidebar!
 *
 *	This file will render the sidebar, as defined by the user in the admin area
 *
*/
?>
<?php if ( ! dynamic_sidebar( 'simple-sidebar' ) ) : // If the user hasn't defined any specific widgets in the admin yet, display a couple dummy widgets, as written below ?>
<aside>
	<h3><?php _e( 'Archives', 'simple' ); // Wordpress archives widget ?></h3>
	<ul>
		<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
	</ul>
</aside>
<aside>
	<h3><?php _e( 'Meta', 'simple' ); // Wordpress meta widget ?></h3>
	<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<?php wp_meta(); ?>
	</ul>
</aside>
<?php endif; // end sidebar widget area ?>