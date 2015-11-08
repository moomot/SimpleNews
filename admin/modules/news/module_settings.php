<?php
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 23.04.2015
 * Time: 23:43
 */
if(isset($_POST['saveSettings'])) {
    $newsOnPage = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['newsOnPage']))));
    $result = mysql_query("UPDATE `settings` SET
			    `newsOnPage` = '".$newsOnPage."'
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
    <h3>Настройки модуля</h3>
    <div class="input-group">
        <h4><span class="label label-default" style="font-weight: normal;">Количество новостей на странице</span></h4>
        <input type="text" class="form-control" required name="newsOnPage" value="'.$row['newsOnPage'].'" placeholder="Новостей на странице">
    </div>
    <p><input type="submit" class="btn btn-default btn-block" name="saveSettings" value="Сохранить настройки &rarr;"/></p>
</form>';
    } else {
        NewsItem::showErrorMsg("Ошибка!");
    }
}