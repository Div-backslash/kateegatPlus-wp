<?php

get_header();

// get Demo Section
require_once dirname( __FILE__ ) . '/template-parts/demo.php';
// get Tabs Section
require_once dirname( __FILE__ ) . '/template-parts/tabs.php';
// get Buy Section
require_once dirname( __FILE__ ) . '/template-parts/buy.php'; 
// get Contact Section
require_once dirname( __FILE__ ) . '/template-parts/contact.php'; 

get_footer(); ?>
