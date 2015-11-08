<?php
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
	$host_username = 'root';
	$host = 'localhost';
	$host_password = '';
	$db_name = 'mydb';
	$connect = mysql_connect($host, $host_username, $host_password) 
			   or die("Error: " . mysql_error() );
	mysql_select_db($db_name, $connect);