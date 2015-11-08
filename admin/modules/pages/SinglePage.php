<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 18.04.2015
 * Time: 23:18
 */
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
class SinglePage extends NewsMain {

    function __construct($title, $fullDescription, $date)
    {
        $this->title = mysql_real_escape_string(htmlspecialchars(strip_tags(trim($title))));
        $this->fullDescription = mysql_real_escape_string((trim($fullDescription)));
        $this->date = mysql_real_escape_string($date);
        $this->formURL();
    }

    /**
     * @return resource
     * Возвращает статус выполнения запроса к БД.
     */
    function addItemToDb() {
        $query = "INSERT INTO pages(`title`, `date`, `fullDescription`, `url`) VALUES
                  (\"$this->title\", \"$this->date\", \"$this->fullDescription\", \"$this->url\")
			";
        $result = mysql_query($query);
        return $result;
    }

    /**
     * Проверяет существует ли новость в БД с таким же названием
     * @return bool
     */
    function isExists(){
        $query = 'SELECT * from pages WHERE title = "'.$this->title.'" ';
        $result = mysql_query($query);
        if($result){
            $rowsCount = mysql_num_rows($result);
            return $rowsCount != 0;
        } else {
            error_log("Query error");
            return false;
        }
    }

    /**
     * @see Функция обновляет поля в БД
     * @param $id
     * @return bool
     */
    function updateFields($id) {
        $result = mysql_query("UPDATE `pages` SET
			    `title` = '".$this->title."',
			    `fullDescription` = '".$this->fullDescription."',
			    `date` = '".$this->date."'
			    WHERE `id` = '".$id."'");
        if (!empty($result)) {
            return true;
        } else {
            return false;
        }
    }
    /**
     * Вывод ошибки
     * @param $err
     */
    static function showErrorMsg($err) {
        echo '<div class="alert alert-danger alert-dismissable">'.$err.'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
    }

    /**
     * Вывод успешной операции
     * @param $text
     */
    static function successOperation($text)
    {
        echo '<div class="alert alert-success alert-dismissable">'.$text.'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>';
    }


    /**
     * Формируем ЧПУ из $this->title
     */
    private function formURL()
    {
        $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я', ' ', "&quot;", "ї", "і");
        $lat = array('a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya', '_', "", 'yi', 'i');
        $this->url = str_replace($rus, $lat, $this->title);
    }



}