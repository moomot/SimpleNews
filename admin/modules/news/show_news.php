<?
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
if(!$_SESSION['admin']) die("Error! You have no permission!");
$url = "http://" . $_SERVER['SERVER_NAME'] . "/" . $_SERVER['REQUEST_URI'];
parse_str($url);
$requestId = $id==''?0:$id;

    if($requestId==0) {
        displayNews();
} else {
        if(!isset($_POST["savePost"])) {
            NewsMain::showItem('news', $requestId);
        } else {
            $newsObj = new NewsItem($_POST["title"], $_POST["author"], $_POST["fullDescription"], $_POST["date"], $_POST["shortDescription"], $_FILES['imgupload']['name']);
            if($newsObj->updateFields($requestId)) {
                $newsObj->successOperation("Новость успешно обновлена!");
                displayNews();
            } else {
                $newsObj->showErrorMsg("Ошибка");
            }
        }
}
echo '</tbody></table><!-- Table --></div>';

function displayNews() {
    $result = mysql_query("SELECT * FROM settings");
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
        </thead>
        <tbody>';
        //NewsMain::showNewsList();
        $obj->showItems(false);
        echo '</tbody></table></div>';
        $obj->displayPageSwitcher();
    } else {
        NewsItem::showErrorMsg("Страница не найдена");
    }
    }

}
