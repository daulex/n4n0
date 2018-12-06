<?php
function show_uc(){
	if(!is_user_logged_in() && $GLOBALS['pagenow'] !== 'wp-login.php'):
		ob_start();
		include ABSPATH . "/uc/uc.html";
		$uc = ob_get_clean();
		echo $uc;
		die();
	endif;
}
// add_action("init", "show_uc");
