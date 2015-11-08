<?
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
if(!$_SESSION['admin']) die("Error! You have no permission!");
$requestId = $_REQUEST['id']==''?'0':$_REQUEST['id'];
if(isset($_POST["submitDelete"])) {
    if (!empty($_POST['checkItem'])) {
        $errorStatus = false;
        foreach ($_POST['checkItem'] as $selectedOption) {
            if(NewsMain::isExistsById($selectedOption)) {
                NewsMain::deleteItem($selectedOption);
            } else {
                $errorStatus = true;
            }
        }
        if($errorStatus) {
            NewsItem::showErrorMsg("Ошибка! Новость не найдена!");
        } else {
            NewsItem::successOperation("Успешно выполнено");
        }
        //todo Вывести статус выполнения операции, использовать функцию существования элемента по ИД
    } else {
        NewsItem::showErrorMsg("Ошибка! Ничего не выбрано!");
    }
}
if($requestId==0) {
    displayNews();
} else {
    if(!isset($_POST["savePost"])) {
        NewsMain::showItem('news',$requestId);
    } else {
        $newsObj = new NewsItem($_POST["title"], $_POST["author"], $_POST["fullDescription"], $_POST["date"], $_POST["shortDescription"], $_FILES['imgupload']['name']);
        if($newsObj->updateFields($requestId)) {
            $newsObj->successOperation("Новость успешно обновлена!");
        } else {
            $newsObj->showErrorMsg("Ошибка");
        }
    }
}
echo '</tbody></table><!-- Table -->
<p><input type="submit" class="btn btn-default btn-block" name="submitDelete" value="Удалить выбранные &rarr;"/></p>
</div>
</form>
';
function displayNews() {
    $result = mysql_query("SELECT * FROM settings");
    echo '<form action="" method="post" accept-charset="utf-8">';
    if(!empty($result)) {
        $row = mysql_fetch_array($result);
        $obj = new PagesSwitch($row['newsOnPage'], 'news');
        if($obj->isPageExists()) {
            echo '<div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Список новостей</div>
        <table class="table">
        <thead>
        <th>id</th>
        <th>Название</th>
        <th>Автор</th>
        <th>Дата</th>
        <th>Удалить</th>
        </thead>
        <tbody>';
            //NewsMain::showNewsList();
            $obj->showItems(true);
            echo '</tbody></table></div>';
            $obj->displayPageSwitcher();
        } else {
            NewsItem::showErrorMsg("Страница не найдена");
        }
    }

}