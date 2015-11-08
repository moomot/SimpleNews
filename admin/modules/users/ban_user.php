<?
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
if(!$_SESSION['admin']) die("Error! You have no permission!");
require_once("../config.php"); ?>
<div class="panel panel-default">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Заблокировать пользователя</div>
	  <div class="panel-body">
<?
	$loginOld =  mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['usernameSearch']))));
	if(isset($_POST['usernameSearch'])) {
			if(searchUser($loginOld) > 0) {
				extract(mysql_fetch_array(makeQuery($loginOld)));
				$status = $isBanned?"checked":"";
				echo '
				<form action="" method="post" accept-charset="utf-8">
				<div class="row">
					<div class="col-md-10">
					<div class="input-group">
			  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			  <input type="text" class="form-control" required name="username" value="'.$loginOld.'" readonly placeholder="Логин">
			</div>
					</div>
					<div class="col-md-2">
						<div class="checkbox">
			  <label><input type="checkbox" '.$status.' name="isBanned" />Заблокирован?</label>
			</div>
					</div>
				</div>
			<p><input type="submit" class="btn btn-default btn-block" name="posted" value="Подтвердить &rarr;"/></p>
			</form>
			';
			} else {
				invalid_input("Пользователь не найден.");
				showSearchBox();
			}
	} else {
		if(isset($_POST['posted'])) {
            $postUsername =  mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['username']))));
			extract(mysql_fetch_array(makeQuery($postUsername)));
			$checkBox = $_POST['isBanned']=="on"?1:0;
			$result = mysql_query("UPDATE `users` SET `isBanned` = '".$checkBox."' WHERE `id` = '".$id."'");
			    if($result && $checkBox == 1) {
                    invalid_input("Успешно заблокирован!");
					showSearchBox();
			    } else if($result && $checkBox==0) {
                    succes_operation("Успешно разблокирован!");
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
