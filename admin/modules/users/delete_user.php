<?
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
if(!$_SESSION['admin']) die("Error! You have no permission!");
?>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Удалить пользователя</div>
  <div class="panel-body">
  	<?
  	if(isset($_POST['del_sbm']))
	{
	$del_login = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['username']))));
	require_once("../config.php");
		$str = "DELETE FROM `users` WHERE login=\"$del_login\";";
		$search_query = 'SELECT * from `users` where login="'.$del_login.'" ';
		if(mysql_num_rows(mysql_query($search_query)) == 0)
		{
			invalid_input("Пользователь не найден! Попробуйте еще раз!");
		} else {
			mysql_query($str);
			succes_operation("Успешно удален!");
			exit;
		}
		
	}
?>
  	<form action="" method="post">
				<div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
  <input type="text" class="form-control" required name="username" placeholder="Логин">
  <span class="input-group-btn">
        <input class="btn btn-default" type="submit" name="del_sbm" value="Найти & Удалить &rarr;" />
      </span>
</div>
	  </form>
  </div>
</div>
