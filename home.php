<?php

	include('userUtils.php');
	print('home');

	verify_user_rights($user);

	verify_user_login($user);
?>
