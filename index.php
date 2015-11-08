<?
session_start();
ob_start();
header('Content-Type: text/html; charset= utf-8');
define("SIMPLENEWS", "NOHACK");
CONST INFITEMS = 4;

require_once("./config.php");
require_once("/admin/settings.php");
require_once("/engine/lib/Twig/Autoloader.php");
require_once("/admin/loadModules.php");

/* Twig tmp */
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates/default');
$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));
$escaper = new Twig_Extension_Escaper(true);
$twig->addExtension($escaper);

$lexer = new Twig_Lexer($twig, array(
    'tag_comment'  => array('{*', '*}'),
    'tag_block'    => array('{', '}'),
    'tag_variable' => array('{$', '}')
));
$twig->setLexer($lexer);
/* endTwig */
$newsQuery = mysql_query('SELECT * FROM news');
mysql_fetch_array($newsQuery);
$informerByDate = NewsMain::getItemsInformerByDate(INFITEMS);
/*
 * Переключатель страниц и новости
 */
$result = mysql_query("SELECT * FROM settings");
if(!empty($result)) {
    $row = mysql_fetch_array($result);
    $pageSwitcher = new PagesSwitch($row['newsOnMain'], 'news');
    if ($pageSwitcher->isPageExists()) {
        $newsItems = $pageSwitcher->getItemsLimited();
        $pageSwitcherData = $pageSwitcher->getData();
    } else {
        NewsItem::showErrorMsg("Страница не найдена");
    }
}
/* Статические страницы */
$staticPages = NewsMain::getPageByName('pages', $name);
/* ==================================================== */
/* Системные инклуды для dataTimePicker, gender */
$sysIncludes = '<link rel="stylesheet" href="'.$siteURL.'/templates/admin/css/bootstrap-datetimepicker.min.css"/>
<script src="'.$siteURL.'/engine/js/moment-with-locales.js"></script>
<script src="'.$siteURL.'/engine/js/admin_scripts.js"></script>
<script src="'.$siteURL.'/engine/js/bootstrap.min.js"></script>
<script src="'.$siteURL.'/engine/js/bootstrap-datetimepicker.min.js"></script>';
/* ==================================================== */
/* Данные пользователя */
$userData = PagesSwitch::getUserData();
$currentUserData = $_SESSION['authorization']['username'];
if(!isset($_SESSION['authorization'])) {
    $currentUserData = "Гость";
} else {
    $currentUserData = $_SESSION['authorization']['username'];
}
/* ==================================================== */
echo $twig->loadTemplate('index.php')->render(array(
    'news' => $fullItem,
    'imgPath' => $siteURL."/uploads",
    'lastNewsByDate' => $informerByDate,
    'title' => $siteName,
    'description' => $siteDescription,
    'path' => $siteURL,
    'id' => $id,
    'issetId' => $issetId,
    'newsItems' => $newsItems,
    'userNews' => $userItems,
    'pageSwitcher' => $pageSwitcherData,
    'module' => $module,
    'staticPage' => $staticPages,
    'do' => $do, // Действие с адресной строки
    'statusMsg' => $statusMsg, // Текст ошибки или успешного выполнения операции
    'regData' => $reg_data, // Массив полей данных регистрации пользователя
    'sysHeaders' => $sysIncludes,
    'logged' => $_SESSION['authorization'],
    'user' => $userData,
    'currentUser' => $currentUserData
));