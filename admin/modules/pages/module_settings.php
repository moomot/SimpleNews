<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 23.04.2015
 * Time: 23:43
 */
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
if(isset($_POST['saveSettings'])) {
    $itemsOnPage = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['itemsOnPage']))));
    $result = mysql_query("UPDATE `settings` SET
			    `itemsOnPage` = '".$itemsOnPage."'
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
        <h4><span class="label label-default" style="font-weight: normal;">Количество элементов на странице</span></h4>
        <input type="text" class="form-control" required name="itemsOnPage" value="'.$row['itemsOnPage'].'" placeholder="Элементов на странице">
    </div>
    <p><input type="submit" class="btn btn-default btn-block" name="saveSettings" value="Сохранить настройки &rarr;"/></p>
</form>';
    } else {
        NewsItem::showErrorMsg("Ошибка!");
    }
}