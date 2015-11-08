<?
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
	if(!$_SESSION['admin']) die("Error! You have no permission!");
	$login = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['username']))));
	$password = $_POST['password'];
	$password_rep = $_POST['password_secondary'];
	$email = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['email']))));
	$gender = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['gender']))));
	$skype = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['skype']))));
	$date = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['birthday']))));

	function ask_for_add_new($text)
	{
		$current_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		echo "<a class=\"btn btn-default btn-block\" href=\"$current_url\">$text</a>";
	}
	function add_to_db($login, $password, $date, $gender, $skype, $email)
	{
		/* WARNING! CHANGE DLE ON YOUR DIR. IF it is root dir - clear dle text, "/engine/config.php" */
		
		require_once("../config.php");
		$query = 'SELECT * from `users` where login="'.$login.'" ';
		$makeQuery = mysql_query($query);
		$count_rows = mysql_num_rows($makeQuery);
		$query_mail = 'SELECT * from `users` where mail="'.$email.'"';
		$mail_rows = mysql_num_rows(mysql_query($query_mail));
		$password = md5($password);
		if($count_rows == 0 && $mail_rows == 0) {
			$add_query = "INSERT INTO `users`(`login`, `password`, `date`, `gender`, `skype`, `mail`) VALUES 
				(\"$login\", \"$password\", \"$date\", \"$gender\", \"$skype\", \"$email\")
			";
			mysql_query($add_query);
			return true;
		} else if($count_rows != 0) {
			invalid_input("Пользователь с таким логином был найден! Пожалуйста, измените логин и попробуйте снова.");
			return false;
		} else if($mail_rows != 0)
		{
			invalid_input("Пользователь с такой почтой был найден! Пожалуйста, измените вашу почту и попробуйте снова.");
			return false;
		}
	}
	if($password != $password_rep)
	{
		invalid_input("Введенные пароли не совпадают.");
	} else if(!empty($password) && !empty($password_rep))
	{
		if(add_to_db($login, $password, $date, $gender, $skype, $email) == true)
		{
			succes_operation("Пользователь был успешно добавлен!");
			ask_for_add_new("Добавить нового пользователя");
			exit;
		}
	}
?>

<form action="" method="post" accept-charset="utf-8">
	<h3>Добавление нового пользователя</h3>
<div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
  <input type="text" class="form-control" required name="username" value="<? echo $_POST['username'] ?>" placeholder="Логин">
</div>
<div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
  <input type="password" class="form-control" required name="password" placeholder="Пароль">
</div>
<div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
  <input type="password" class="form-control" required name="password_secondary" placeholder="Повторите пароль">
</div>
<div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
  <input type="email" class="form-control" required name="email" value="<? echo $_POST['email'] ?>"  placeholder="E-Mail">
</div>

<div class="btn-group gender">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Выбрать пол
 <span class="caret"></span>
 </button>
  <ul class="dropdown-menu">
    <li><a href="javascript://">Male</a></li>
    <li><a href="javascript://">Famale</a></li>
  </ul>
  <input type="hidden" name="gender" value="<? echo $_POST['gender'] ?>" >
</div>

<div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-send"></span></span>
  <input type="text" class="form-control" name="skype" placeholder="Skype"  value="<? echo $_POST['skype'] ?>" >
</div>
<div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
  <input type="date" class="form-control" required name="birthday" placeholder="Дата рождения"  value="<? echo $_POST['birthday'] ?>" >
</div>
  <p><input type="submit" class="btn btn-default btn-block" name="posted" value="Добавить &rarr;"/></p>
</form>