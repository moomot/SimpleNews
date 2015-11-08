<?php
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
	session_start();
	require_once("admin_config.php");
	
	$username = $_POST['username'];
	$password = md5(md5($_POST['password']));
	if($admin_password == $password && $admin_login == $username)
	{
		require_once("../engine/config.php");
		require_once("admin_panel.php");
	} else
	{
		die("Ошибка! Попробуйте еще раз.");
	}
	
?>