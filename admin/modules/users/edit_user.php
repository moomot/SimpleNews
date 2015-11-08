<?
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
if(!$_SESSION['admin']) die("Error! You have no permission!");
?>
<div class="panel panel-default">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Редактирование пользователя</div>
	  <div class="panel-body">
<?
	require_once("../config.php");
	
	function displayFields($login) {
		$row = mysql_fetch_array(makeQuery($login));
		extract($row);
		echo '<form action="" method="post" accept-charset="utf-8">
					<div class="input-group">
			  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			  <input type="text" class="form-control" required name="id" value="'.$id.'" readonly placeholder="ID">
			</div>
			<div class="input-group">
			  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			  <input type="text" class="form-control" required name="username" value="'.$login.'" placeholder="Логин">
			</div>
			<div class="input-group">
			  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
			  <input type="password" class="form-control" required name="password" placeholder="Пароль" value="">
			</div>
			<div class="input-group">
			  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
			  <input type="password" class="form-control" required name="password_secondary" placeholder="Повторить пароль"  value="">
			</div>
			<div class="input-group">
			  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
			  <input type="email" class="form-control" required name="email"   value="'.$mail.'"  placeholder="E-Mail">
			</div>
			
			<div class="btn-group gender">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Выбрать пол
			 <span class="caret"></span>
			 </button>
			  <ul class="dropdown-menu">
			    <li><a href="javascript://">Male</a></li>
			    <li><a href="javascript://">Famale</a></li>
			  </ul>
			  <input type="hidden" name="gender" value="'.$gender.'" >
			</div>
			
			<div class="input-group">
			  <span class="input-group-addon"><span class="glyphicon glyphicon-send"></span></span>
			  <input type="text" class="form-control" name="skype" placeholder="Skype" value="'.$skype.'" >
			</div>
			<div class="input-group">
			  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
			  <input type="date" class="form-control" required name="birthday" placeholder="Дата рождения" value="'.$date.'" >
			</div>
			  <p><input type="submit" class="btn btn-default btn-block" name="posted" value="Подтвердить &rarr;"/></p>
			</form>';
	}

    $login = trim($_POST['usernameSearch']);
    $login = strip_tags($login);
    $login = htmlspecialchars($login);
    $login = mysql_real_escape_string($login);
	if(isset($_POST['usernameSearch'])) {
			if(searchUser($login) > 0) {
				displayFields($login);
			} else {
				invalid_input("Пользователь не найден.");
				showSearchBox();
			}
	} else {
		if(isset($_POST['username']) && 
			  isset($_POST['password']) && 
			  isset($_POST['password_secondary']) && 
			  isset($_POST['email']) && 
			  isset($_POST['gender']) &&  
			  isset($_POST['birthday'])) {
			  	$thisId = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['id']))));
			  	$query = 'SELECT * from `users` where id="'.$thisId.'" ';
			  	$row = mysql_fetch_array(mysql_query($query));
			    extract($row);
                $username = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['username']))));
                $mail = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['email']))));
                $password = md5(mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['password'])))));
                $date = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['birthday']))));
                $gender = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['gender']))));
                $skype = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['skype']))));
			    $result = mysql_query("UPDATE `users` SET 
			    `login` = '".$username."',
			    `mail` = '".$mail."',
			    `password` = '".$password."',
			    `date` = '".$date."',
			    `gender` = '".$gender."',
			    `skype` = '".$skype."'
			    WHERE `id` = '".$id."'");
			    if($result) {
			    	succes_operation("Успешно отредактирован!");
					showSearchBox();
			    } else {
			    	invalid_input("Update fields error. Try later...");
			    }
			    
		} else {
			showSearchBox();
		}
	}
?>
</div>
</div>