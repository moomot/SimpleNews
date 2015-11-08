<?php
	session_start();
	// tabs
	include "tabs.php";
	$t=new Tabs($path);
	$sel=$_REQUEST['mod']=='' ? 0 :  (int)$_REQUEST['mod'];
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<? require_once("../engine/headers.php"); ?>
</head>
<body>
	<section class="container mainContainer">
		<div class="row">
			<div class="well well-sm">
				<div class="col-md-8 col-sm-8">
					<?
						$t->add_tabs("Главная страница", "main.php");
						$t->add_tabs("Пользователи", "modules/users/users.php");
						$t->add_tabs("Новости", "modules/news/news.php");
						$t->add_tabs("Статические страницы", "modules/pages/pages.php");
                        $t->add_tabs("Настройки сайта", "modules/settings/settings.php");
						$t->render_tabs($sel);
					?>
				</div>
				<div class="col-md-4 col-sm-4 logout">
					<a href="admin_logout.php" class="btn btn-default pull-right">Выход</a>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
		
		<div class="row tabcontent">
			<?
			$t->render_content($sel);
			?>
		</div>
	</section>
    <? include("../engine/footer.php"); ?>
</body>
</html>