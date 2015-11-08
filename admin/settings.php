<?
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
$result = mysql_query('SELECT * FROM settings');
if(!empty($result)) {
$row = mysql_fetch_array($result);
extract($row);
}

//function renderUnicTpl() {
//    $token = md5(uniqid(rand(),1));
//    $userSource = ob_get_contents();
//    $tokensDir = "engine/tokens/";
//    $fullPath = $tokensDir.$token.".php";
//    if(!file_exists($fullPath)) {
//        $file = fopen($fullPath, "w");
//        fwrite($file, $userSource);
//    }
//    ob_end_clean();
//    fclose($file);
//    $tpl = file_get_contents($fullPath);
//    unlink($fullPath);
//    return $tpl;
//}
