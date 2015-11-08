<?
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
if(!$_SESSION['admin']) die("Error! You have no permission!");
require_once("NewsItem.php");
if(isset($_POST['postNews'])) {
    // Получаем поля новости
    $title = $_POST["title"];
    $shortDescription = $_POST["shortDescription"];
    $fullDescription = $_POST["fullDescription"];
    $date = date("Y-m-d H:i:s");
    $author = $_POST["author"];
    $thumbnail = $_FILES['imgupload']['name'];
    // Создаем объект класса
    $newsObj = new NewsItem($title, $author, $fullDescription, $date, $shortDescription, $thumbnail);
    if($author == "") { // Если автор не установлен
        $newsObj->showErrorMsg("Выберите автора новости!");
        showForm();
        return;
    }
    if(!$newsObj->isExists()) {
        $newsObj->addItemToDb(); // Добавление новости в БД
        $newsObj->successOperation("Новость успешно добавлена!");
    } else {
        $newsObj->showErrorMsg("Данная новость уже существует!");
    }
} else {
        showForm();
}

function showForm() {
    echo '<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    <h3>Добавление новости</h3>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
        <input type="text" class="form-control noborder" required name="title" value="'.$_POST['title'].'" placeholder="Заголовок новости">
    </div>
    <div class="input-group fullWidth">
        <h4><span class="label label-default" style="font-weight: normal;">Краткое описание новости (обязательное)</span></h4>
        <textarea class="form-control" required name="shortDescription" placeholder="Краткое описание новости" cols="30" rows="7" >'.$_POST["shortDescription"].'</textarea>
    </div>
    <div class="input-group fullWidth">
    <h4><span class="label label-default" style="font-weight: normal;">Полное описание новости (обязательное)</span></h4>
        <textarea class="form-control" required name="fullDescription" placeholder="Полное описание новости" cols="30" rows="15" >'.$_POST["fullDescription"].'</textarea>
    </div>
    <div class="btn-group users">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Выбрать пользователя
 <span class="caret"></span>
 </button>
  <ul class="dropdown-menu">';
    NewsItem::showUsers();
    echo '
  </ul>
  <input type="hidden" name="author" value="'.$_POST['author'].'" >
</div>
<div class="input-group">
 <span class="input-group-addon">Изображение</span>
<input class="form-control noborder"  type="FILE" required name="imgupload">
</div>
    <p><input type="submit" class="btn btn-default btn-block" name="postNews" value="Добавить &rarr;"/></p>
</form>';
}
