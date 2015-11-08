<?
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
if(!$_SESSION['admin']) die("Error! You have no permission!");
include("PagesSwitch.php");
include("modules/news/NewsItem.php");
$obj = new PagesSwitch(4, 'users');
if($obj->isPageExists()) {
echo '
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Список пользователей</div>
<table class="table">
    <thead>
    	<th>id</th>
    	<th>Логин</th>
    	<th>Пароль</th>
    	<th>Дата рождения</th>
    	<th>Пол</th>
    	<th>skype</th>
    	<th>email</th>
    </thead>
    <tbody>';
    $obj->showUserItems();
    	echo '
    </tbody>
  </table></div>';

echo '</tbody></table></div>';
$obj->displayPageSwitcher();
} else {
NewsItem::showErrorMsg("Страница не найдена");
}