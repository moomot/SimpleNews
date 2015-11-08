<?
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
if(!$_SESSION['admin']) die("Error! You have no permission!");
	include "tabs_inner.php";
    include("./PagesSwitch.php");
    include("../config.php");
    include("NewsItem.php");
	$path = $_SERVER['REQUEST_URI'];
	$re = "/(.\\D*\\d)/"; 
	preg_match($re, $path, $matches);
	$t=new Tabs_inner($matches[0]);

$url = "http://" . $_SERVER['SERVER_NAME'] . "/" . $_SERVER['REQUEST_URI'];
parse_str($url);
$sel = $op==''?0:$op;

function invalid_input($error_text)
	{
		echo '<div class="alert alert-danger alert-dismissable">'.$error_text.'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
	}
	function succes_operation($text)
	{
		echo '<div class="alert alert-success alert-dismissable">'.$text.'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
	}
?>
<div class="col-md-3 col-md-offset-0">
	<div class="well">
		<?
			$t->add_tabs("Главная страница новостей", "modules/news/main.php");
			$t->add_tabs("Добавить новость", "modules/news/add_news.php");
			$t->add_tabs("Список новостей", "modules/news/show_news.php");
			$t->add_tabs("Удалить новость", "modules/news/delete_news.php");
            $t->add_tabs("Настройки модуля", "modules/news/module_settings.php");
			$t->render_tabs($sel);
		?>
	</div>
</div>
<div class="col-md-9 ">
	<?
		$t->render_content($sel);
	?>
</div>