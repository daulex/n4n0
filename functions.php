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
	add_action('get_header', 'parse_less');
	

	// Everyone uses menus and post-thumbnails
	if ( function_exists( 'add_theme_support' ) ) { 
		add_theme_support('menus');
		add_theme_support('post-thumbnails');
	}
	
	// Because [...] is fucking ugly
	function new_excerpt_more($more) {
		return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
