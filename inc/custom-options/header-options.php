<?php
	$options[] = array(
		'name' => __( 'General', 'theme-textdomain' ),
		'type' => 'heading'
	);
        // Simple_text input
    	$options[] = array(
		'name' => __( 'Simple text', 'theme-textdomain' ),
		'desc' => __( 'here! ,you can edit the description text in the header', 'theme-textdomain' ),
		'id' => 'simple_text',
		'std' => '',
		'type' => 'text'
	);   
    // main_text input
    	$options[] = array(
		'name' => __( 'main text', 'theme-textdomain' ),
		'desc' => __( 'here! ,you can edit the main text in the header', 'theme-textdomain' ),
		'id' => 'main_text',
		'std' => '',
		'type' => 'text'
	);
?>