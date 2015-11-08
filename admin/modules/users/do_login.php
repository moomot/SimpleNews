<?php
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 07.05.2015
 * Time: 12:42
 */
/* Форма входа */
if(!isset($_SESSION['authorization'])) {
    if (isset($_POST['do_login'])) {
        $login = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['username']))));
        $password = $_POST['password'];
        $result = mysql_query("SELECT login, password FROM users WHERE login = '" . $login . "'");
        if (mysql_num_rows($result) == 0) {
            $msg = '<div class="alert alert-danger alert-dismissable">' . 'Пользователь с таким логином не зарегистрирован.' . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
            $statusMsg = array("msg" => $msg, "status" => "error");
        } else {
            $row = mysql_fetch_array($result);
            if ($row['password'] == md5($password)) {
                session_start();
                $_SESSION['authorization']['time'] = time();
                $_SESSION['authorization']['username'] = $login;
                header("Location: /my_cms");
            } else {
                $msg = '<div class="alert alert-danger alert-dismissable">' . 'Неправильный пароль!' . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
                $statusMsg = array("msg" => $msg, "status" => "error");
            }
        }
    }
}
/* ================================================================= */