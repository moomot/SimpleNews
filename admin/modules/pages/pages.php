<?
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
if(!$_SESSION['admin']) die("Error! You have no permission!");
include("./modules/news/NewsItem.php");
include "tabs_inner.php";
include("SinglePage.php");
require_once("../config.php");
include("./PagesSwitch.php");
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
        $t->add_tabs("Главная страница", "modules/pages/pages_main.php");
        $t->add_tabs("Создать страницу", "modules/pages/add_page.php");
        $t->add_tabs("Список страниц", "modules/pages/show_pages.php");
        $t->add_tabs("Удалить страницу", "modules/pages/delete_pages.php");
        $t->add_tabs("Настройки модуля", "modules/pages/module_settings.php");
        $t->render_tabs($sel);
        ?>
    </div>
</div>
<div class="col-md-9 ">
    <?
    $t->render_content($sel);
    ?>
</div>