<?php
add_action('wp_ajax_ajax_backlink', 'xyz_fsp_ajax_backlink');

function xyz_fsp_ajax_backlink() {
	global $wpdb;

	if($_POST){

		// 	$xyz_cfm_credit=absint($_POST['enable']);
		update_option('xyz_credit_link','fsp');
	}
}

?>