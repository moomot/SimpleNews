<?php
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 08.05.2015
 * Time: 22:03
/*
 * Получаем ID новости
 */
if(isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $id==''?0:$id;
    $issetId = true;
} else {
    $id=0;
    $issetId = false;
}
/*
 * Получаем name новости
 */
if(isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
}
/*
 * Получаем action do
 */
if(isset($_REQUEST['do'])) {
    $do = $_REQUEST['do'];
    switch ($do) {
        case 'logout': {
            unset($_SESSION['authorization']);
            header('Location: '.$siteURL.'');
            break;
        }
        case 'news_add': {
            if(!isset($_SESSION['authorization'])) {
                ob_clean();
                require("./templates/default/404.php");
                exit;
            }
            break;

        }
        case 'news_list': {
            if(!isset($_SESSION['authorization'])) {
                ob_clean();
                require("./templates/default/404.php");
                exit;
            }
            /*
 * Переключатель страниц и новости
 */
            $result = mysql_query("SELECT * FROM settings");
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
            break;
        }
        case 'register': {
            break;
        }
        case 'login': {
            break;
        }
		case 'search' : {
			include("/../search/search.php");
			break;
		}
        default:
            ob_clean();
            require("./templates/default/404.php");
            exit;

    }
}
if(isset($_REQUEST['full'])) {
    /*
 * Возвращает массив полной новости по ИД
 */
    $fullItem = NewsMain::getPageByName('news', $name);
}
/* Получаем название модуля */
$url = parse_url($_SERVER['REQUEST_URI']);
$arr = explode("/", $url['path']);
$sizeArr = count($arr);
if($arr[$sizeArr-1] == '') {
    $module = $arr[$sizeArr-2];
} else {
    if(is_numeric($arr[$sizeArr-1])) {
        $module = $arr[$sizeArr-2];
    } else if(strpos($url['path'],'pages') !== false) {
        $module = $arr[$sizeArr-2];
    } else{
        $module = $arr[$sizeArr-1];
    }
}
if(isset($_REQUEST['uname'])) {
    $module = "user";
}
/* ==================================================== */