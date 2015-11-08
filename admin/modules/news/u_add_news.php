<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 08.05.2015
 * Time: 23:18
 */
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
require_once("NewsItem.php");
if(isset($_POST['news_add'])) {
    $title = $_POST["title"];
    $shortDescription = $_POST["shortDescription"];
    $fullDescription = $_POST["fullDescription"];
    $date = date("Y-m-d H:i:s");
    $author = $_COOKIE['username'];
    $thumbnail = $_FILES['imgupload']['name'];
    $newsObj = new NewsItem($title, $author, $fullDescription, $date, $shortDescription, $thumbnail);
    $reg_data = array("title"=>$title, "author"=>$author, "fullDescription"=> $fullDescription, "date"=>$date, "shortDescription"=>$shortDescription, "thumnbail"=>$thumbnail);
    if(!$newsObj->isExists()) {
        $newsObj->addItemToDb();
        $msg = '<div class="alert alert-success alert-dismissable">'.'Новость успешно добавлена!'.'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
        $statusMsg = array("msg" => $msg, "status" => "success");
    } else {
        $msg = '<div class="alert alert-danger alert-dismissable">'.'Новость с таким названием уже существует!'.'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
        $statusMsg = array("msg" => $msg, "status" => "error");
    }
} else {

}