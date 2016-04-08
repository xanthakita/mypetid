<?php
	$server = "xxx.xxx.xxx";
	$username = "xxxxxxxxx";
	$password = "xxxxxxxxxx";
	$link = mysql_connect($server, $username, $password);
	if (!$link) {
	    die('Could not connect: ' . mysql_error());
	}
	mysql_select_db ('toque_db');
	echo 'Connected successfully<br>';
?>
