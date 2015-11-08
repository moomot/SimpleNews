<?
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
if(!$_SESSION['admin']) die("Error! You have no permission!");
require_once("SinglePage.php");
if(isset($_POST['postNews'])) {
    $title = $_POST["title"];
    $fullDescription = $_POST["fullDescription"];
    $date = date("Y-m-d H:i:s");
    $pageObj = new SinglePage($title, $fullDescription, $date);

    if(!$pageObj->isExists()) {
        $pageObj->addItemToDb();
        $pageObj->successOperation("Страница успешно добавлена!");
    } else {
        $pageObj->showErrorMsg("Данная страница уже существует!");
    }
} else {
    showForm();
}

function showForm() {
    echo '<form action="" method="post" accept-charset="utf-8">
    <h3>Добавление страницы</h3>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
        <input type="text" class="form-control noborder" required name="title" value="'.$_POST['title'].'" placeholder="Заголовок страницы">
    </div>
    <div class="input-group fullWidth">
    <h4><span class="label label-default" style="font-weight: normal;">Содержание страницы (обязательное)</span></h4>
        <textarea class="form-control noborder" required name="fullDescription" placeholder="Полное описание новости" cols="30" rows="15" >'.$_POST["fullDescription"].'</textarea>
    </div>
    <p><input type="submit" class="btn btn-default btn-block" name="postNews" value="Добавить &rarr;"/></p>
</form>';
}
