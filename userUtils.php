<?php 
	function verify_user_rights($user){
		return $user->canLogin();
	}
?>
