<?php
	// A must-have
	function failed_login () {
		return 'the login information you have entered is incorrect.';
	}
	add_filter ( 'login_errors', 'failed_login' );


	// Less parser
	function parse_less(){
		require TEMPLATEPATH."/a/css/lessc.inc.php";
		$less = new lessc;
		try{
			$less->checkedCompile(TEMPLATEPATH."/a/css/base.less", TEMPLATEPATH."/a/css/base.css");
		}catch(exception $e){
			echo "fatal error: " . $e->getMessage();
		}
	}
	if(current_user_can("administrator"))
		add_action('get_header', 'parse_less');
	

	// Everyone uses menus and post-thumbnails
	if ( function_exists( 'add_theme_support' ) ) { 
		add_theme_support('menus');
		add_theme_support('post-thumbnails');
	}
	
	// Because [...] is ugly
	function new_excerpt_more($more) {
		return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

	// optional live dev mode
// 	if(!current_user_can("administrator") && $GLOBALS['pagenow'] !== 'wp-login.php')
// 		die("maintenance");

	// handy add image sizes 
	// add_image_size( $name, $width = 0, $height = 0, $crop = false )

	// load helpers
	include 'functions/disable_comments.inc.php';
	include 'functions/disable_emojis.inc.php';


