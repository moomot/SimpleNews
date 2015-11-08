<?
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
if(!$_SESSION['admin']) die("Error! You have no permission!");
echo '<div class="well">
    <h4>Общие настройки</h4>';


require_once("../config.php");
require_once("./modules/news/NewsItem.php");

if(isset($_POST['saveSettings'])) {
    $siteName = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['siteName']))));
    $siteDescription  = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['siteDescription']))));
    $newsOnMain = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['newsOnMain']))));
    $result = mysql_query("UPDATE `settings` SET
			    `siteName` = '".$siteName."',
			    `siteDescription` = '".$siteDescription."',
			    `newsOnMain` = '".$newsOnMain."'
			    WHERE `id` = '1'");
    if(!empty($result)) {
        NewsItem::successOperation("Настройки успешно сохранены");
    } else {
        NewsItem::showErrorMsg("Ошибка!");
    }
}
showForm();

function showForm() {
    $result = mysql_query('SELECT * FROM settings');
    if(!empty($result)) {
        $row = mysql_fetch_array($result);
        echo '<form action="" method="post" accept-charset="utf-8">
    <div class="input-group fullWidth">
        <h4><span class="label label-default" style="font-weight: normal;">Заголовок сайта</span></h4>
        <input type="text" class="form-control" required name="siteName" value="'.$row['siteName'].'" placeholder="Заголовок страницы">
    </div>
<div class="input-group fullWidth">
        <h4><span class="label label-default" style="font-weight: normal;">Описание сайта</span></h4>
        <input type="text" class="form-control fullWidth" required name="siteDescription" value="'.$row['siteDescription'].'" placeholder="Описание сайта">
    </div>
    <h4>Новости сайта</h4>
    <div class="input-group fullWidth">
        <h4><span class="label label-default" style="font-weight: normal;">Количество новостей на главной</span></h4>
        <input type="text" class="form-control fullWidth" required name="newsOnMain" value="'.$row['newsOnMain'].'" placeholder="Количество новостей на главной">
    </div>
    <p><input type="submit" class="btn btn-default btn-block" name="saveSettings" value="Сохранить настройки &rarr;"/></p>
</form>';
    } else {
        NewsItem::showErrorMsg("Ошибка!");
    }
}
echo '</div>';