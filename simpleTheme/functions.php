<?php

	function Theme_Files(){

		/*== Own CSS and JS ==*/
		wp_enqueue_style('stylesheet', get_stylesheet_uri());
		/*== End Own CSS and JS ==*/

		/*== BOOTSTRAP ==*/
		wp_enqueue_style('net_bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
		wp_enqueue_script('net_bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array(''), '1.0', true);
		/*== END BOOTSTRAP ==*/


	}
	add_action ('wp_enqueue_scripts', 'Theme_Files');
?>