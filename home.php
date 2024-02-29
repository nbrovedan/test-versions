<?php

	include('userUtils.php');
	print('Home using bootstrap 5.0');

	verify_user_rights($user);

	verify_user_login($user);
?>
