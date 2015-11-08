<?php
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 06.05.2015
 * Time: 13:00
 */
if(isset($_POST['register'])) {
$login = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['username']))));
$password = $_POST['password'];
$password_rep = $_POST['password_secondary'];
$email = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['email']))));
$gender = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['gender']))));
$skype = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['skype']))));
$date = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['birthday']))));
$reg_data = array("login"=>$login, "password"=>$password, "email"=>$email, "gender" => $gender, "skype" => $skype, "date"=>$date);
function ask_for_add_new($text)
{
    $current_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    return "<a class=\"btn btn-default btn-block\" href=\"$current_url\">$text</a>";
}
function add_to_db($login, $password, $date, $gender, $skype, $email)
{
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
        $msg = '<div class="alert alert-danger alert-dismissable">'.'Пользователь с таким логином был найден! Пожалуйста, измените логин и попробуйте снова.'.'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
        $statusMsg = array("msg" => $msg, "status" => "error");
        return false;
    } else if($mail_rows != 0)
    {
        $msg = '<div class="alert alert-danger alert-dismissable">'.'Пользователь с такой почтой был найден! Пожалуйста, измените вашу почту и попробуйте снова.'.'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
        $statusMsg = array("msg" => $msg, "status" => "error");
        return false;
    }
}
if($password != $password_rep)
{
    $msg = '<div class="alert alert-danger alert-dismissable">'.'Введенные пароли не совпадают.'.'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
    $statusMsg = array("msg" => $msg, "status" => "error");
    return;
} else if(!empty($password) && !empty($password_rep))
{
    if(add_to_db($login, $password, $date, $gender, $skype, $email) == true)
    {
        $msg = '<div class="alert alert-success alert-dismissable">'.'Успешно зарегистрирован!'.'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
        $statusMsg = array("msg" => $msg, "status" => "success");
    }
}
} else {
    $statusMsg = array("msg" => "", "status" => "error");
}