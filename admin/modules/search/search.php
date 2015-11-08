<?
if(isset($_POST['find']))
{
	$searchQuery = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($_POST['searchQuery']))));
	//Select from news table our $searchQuery and return array of rows (ex. searchItemsArray[])
	$result = mysql_query("SELECT id, title, url, shortDecscription FROM news LIKE '".$searchQuery."'");
	if(!empty($result)) {
                $row = mysql_fetch_array($result);
                $pageSwitcher = new PagesSwitch($row['newsOnMain'], 'news');
                if ($pageSwitcher->isPageExists()) {
                    $userItems = $pageSwitcher->getUserNews();
                    $pageSwitcherData = $pageSwitcher->getData();
                } else {
                    NewsItem::showErrorMsg("Страница не найдена");
                }
    }
}
