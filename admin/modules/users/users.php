<?
    if (!defined("SIMPLENEWS")){ die("Hacker..."); }
	if(!$_SESSION['admin']) die("Error! You have no permission!");
	include "tabs_inner.php";
    include("../config.php");
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
	function showSearchBox() {
	echo '
  	Введите имя пользователя
  	<form action="" method="post">
				<div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
  <input type="text" class="form-control" required name="usernameSearch" placeholder="Логин">
  <span class="input-group-btn">
        <input class="btn btn-default" type="submit" name="del_sbm" value="Найти &rarr;" />
      </span>
</div>
	  </form>';
}
	function makeQuery($str) {
		$query = 'SELECT * from `users` where login="'.$str.'" ';
		return mysql_query($query);
	}
	function searchUser($login) {
		$count_rows = mysql_num_rows(makeQuery($login));
		return $count_rows;
	}
?>
<div class="col-md-3 col-md-offset-0">
	<div class="well">
		<?
			$t->add_tabs("Главная страница", "modules/users/main.php");
			$t->add_tabs("Добавить пользователя", "modules/users/add_user.php");
			$t->add_tabs("Список пользователей", "modules/users/show_users.php");
			$t->add_tabs("Редактировать пользователя", "modules/users/edit_user.php");
			$t->add_tabs("Удалить пользователя", "modules/users/delete_user.php");
			$t->add_tabs("Заблокировать пользователя", "modules/users/ban_user.php");
			$t->render_tabs($sel);
		?>
	</div>
</div>
<div class="col-md-9 ">
	<?
		$t->render_content($sel);
	?>
</div>