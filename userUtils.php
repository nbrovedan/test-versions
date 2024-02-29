<?php 
	function verify_user_rights($user){
		return $user->right();
	}

	function verify_user_login($user){
		return $user-canLogin();
	}
?>
