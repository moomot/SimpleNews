<?
define("SIMPLENEWS", "NOHACK");
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
	header('Content-Type: text/html; charset= utf-8');
	session_start();
	if(!empty($_SESSION['admin'])) {
		if($_SESSION['admin'])
		{
			require_once("admin_panel.php");
			exit;
		}
	}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<? require_once("../engine/headers.php"); ?>
</head>
<body>
	<div class="container-fl container">
    <div class="row-fluid">
        <div class="centering text-center">
			<?
				$_SESSION['admin'] = false;
				require_once("admin_config.php");
				function not_logged($error_text)
				{
					echo '
					<div class="row">
					<div class="well">
					';
					if($error_text) echo '<div class="alert alert-danger alert-dismissable">'.$error_text.'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
					echo '
					<h3>Вход в панель администратора!</h3>
					<form method="POST" action="index.php" class="col-md-offset-3">
					<div class="row">
						<div class="col-md-8">
							<input autocomplete="off" type="text" name="username" class="form-control" value="" placeholder="Логин..." required />
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<input autocomplete="off" type="password" name="password" class="form-control pass_field" value="" placeholder="Пароль..." required />
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<input type="submit" name="sbm" class="btn btn-default btn-padding btn-block" value="Войти" />
						</div>
					</div>
					</form>
					</div>
					</div>
					';
					exit;
				}
				$username = $_POST['username'];
				$password = md5(md5($_POST['password']));
				if(!$_POST)
				{
					//require_once("../engine/config.php");
					//$require = mysql_query('INSERT INTO `mytable`(`name`) VALUES ("text");') 
					//or die('Mysql error: ' . mysql_error());
					//require_once("admin_panel.php");
					not_logged("");
				}
				if($admin_password != $password || $admin_login != $username)
				{
					not_logged("Пароль введен неверно! Попробуйте еще раз!");
				}
				$_SESSION['admin'] = true;
				echo '<script type="text/javascript">location.reload();</script>'
			?>
	</div></div></div>
</body>
</html>