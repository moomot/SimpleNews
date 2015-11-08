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
        NewsMain::showItem('pages', $requestId);
    } else {
        $pageObj = new SinglePage($_POST["title"], $_POST["fullDescription"], $_POST["date"]);
        if($pageObj->updateFields($requestId)) {
            $pageObj->successOperation("Страница успешно обновлена!");
            displayNews();
        } else {
            $pageObj->showErrorMsg("Ошибка");
        }
    }
}
echo '</tbody></table><!-- Table --></div>';

function displayNews() {
    $result = mysql_query("SELECT * FROM settings");
    if(!empty($result)) {
        $row = mysql_fetch_array($result);
        $obj = new PagesSwitch($row['itemsOnPage'], 'pages');
        if($obj->isPageExists()) {
            echo '<div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Список страниц</div>
        <table class="table">
        <thead>
        <th>id</th>
        <th>Название</th>
        <th>Дата</th>
        </thead>
        <tbody>';
            //NewsMain::showNewsList();
            $obj->showItemsPages();
            echo '</tbody></table></div>';
            $obj->displayPageSwitcher();
        } else {
            NewsItem::showErrorMsg("Страница не найдена");
        }
    }

}
