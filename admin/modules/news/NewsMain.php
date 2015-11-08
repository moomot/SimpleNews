<?php
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 19.04.2015
 * Time: 1:25
 */

class NewsMain
{
    public $title;
    public $author;
    public $fullDescription;
    public $date;
    public $shortDescription;
    public $id;
    public $url;

    function __construct($id)
    {
        require_once("./config.php");
        $this->id = $id;
    }

    static function showNewsList()
    {
        $result = mysql_query('SELECT * FROM `news` ORDER BY `date` DESC');
        if (!empty($result)) {
            while ($row = mysql_fetch_array($result)) {
                $path = $_SERVER['REQUEST_URI'];
                $re = "/\\D*\\d&\\D*\\d/";
                preg_match($re, $path, $matches);
                echo "<tr>

				<td>" . $row['id'] . "</td>
				<td><a href=" . $matches[0] . '&id=' . $row['id'] . ">" . $row['title'] . "</a></td>
				<td>" . $row['author'] . "</td>
				<td>" . $row['date'] . "</td>

			</tr>";
            }
        } else {
            echo "Nothing selected";
        }
    }

    static function showItem($tableName, $id)
    {
        $result = mysql_query('SELECT * FROM ' . $tableName . ' WHERE id="' . $id . '"');
        if (!empty($result)) {
            while ($row = mysql_fetch_array($result)) {
                if ($tableName == 'news') {
                    echo '<form action="" method="post" accept-charset="utf-8">
                        <h3>' . $row['title'] . '</h3>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
                            <input type="text" class="form-control noborder" required name="title" value="' . $row['title'] . '" placeholder="Заголовок новости">
                        </div>

                        <div class="input-group fullWidth">
                        <h4><span class="label label-default" style="font-weight: normal;">Краткое описание новости (обязательное)</span></h4>
                            <textarea class="form-control" required name="shortDescription" placeholder="Краткое описание новости" cols="30" rows="7" >' . $row["shortDescription"] . '</textarea>
                        </div>
                        <div class="input-group fullWidth">
                        <h4><span class="label label-default" style="font-weight: normal;">Полное описание новости (обязательное)</span></h4>
                            <textarea class="form-control" required name="fullDescription" placeholder="Полное описание новости" cols="30" rows="15" >' . $row["fullDescription"] . '</textarea>
                        </div>
                            <div class="btn-group author_edit">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">' . $row['author'] . '
                             <span class="caret"></span>
                             </button>
                              <ul class="dropdown-menu">';
                    NewsItem::showUsers();
                    echo '
                              </ul>
                              <input type="hidden" required name="author" value="' . $row['author'] . '" >
                            </div>
                        <div class="input-group date" id="datetimepicker1">
                            <input type="text" required class="form-control" name="date"  value="' . $row['date'] . '" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        <div class="input-group">
                        <div class="input-group-addon">
                        <img src="../uploads/' . $row['thumbnail'] . '" width="100" height="100" alt="poster" />
                        </div>
                        <input class="form-control noborder pull-right" value="../uploads/' . $row['thumbnail'] . '" type="FILE" name="imgupload">
</div>

                        <p><input type="submit" class="btn btn-default btn-block" name="savePost" value="Сохранить &rarr;"/></p>
                    </form>';
                } else if ($tableName == 'pages') {
                    echo '<form action="" method="post" accept-charset="utf-8">
                        <h3>' . $row['title'] . '</h3>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
                            <input type="text" class="form-control" required name="title" value="' . $row['title'] . '" placeholder="Заголовок страницы">
                        </div>
                        <div class="input-group fullWidth">
                        <h4><span class="label label-default" style="font-weight: normal;">Содержимое страницы (обязательное)</span></h4>
                            <textarea class="form-control" required name="fullDescription" placeholder="Содержимое страницы" cols="30" rows="15" >' . $row["fullDescription"] . '</textarea>
                        </div>
                        <div class="input-group date" id="datetimepicker1">
                            <input type="text" required class="form-control" name="date"  value="' . $row['date'] . '" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>

                        <p><input type="submit" class="btn btn-default btn-block" name="savePost" value="Сохранить &rarr;"/></p>
                    </form>';
                }
            }
        } else {
            echo "Nothing selected";
        }
    }

    static function showNewsListForDelete()
    {
        require_once("../config.php");
        $result = mysql_query('SELECT * FROM `news` ORDER BY `date` DESC');
        if (!empty($result)) {
            while ($row = mysql_fetch_array($result)) {
                $path = $_SERVER['REQUEST_URI'];
                $re = "/\\D*\\d&\\D*\\d/";
                preg_match($re, $path, $matches);
                echo '<tr>

				<td>' . $row['id'] . '</td>
				<td><a href=' . $matches[0] . '&id=' . $row['id'] . '>' . $row['title'] . '</a></td>
				<td>' . $row['author'] . '</td>
				<td>' . $row['date'] . '</td>
                <td><div class="input-group text-center center-block" style="margin:0">
        <input type="checkbox" name="checkItem[]" multiple value="' . $row['id'] . '">
</div></td>
			</tr>';
            }
        } else {
            echo "Nothing selected";
        }
    }

    /**
     * Функция возвращает true если новость удалена, false - если нет
     * @param $itemId
     * @return bool
     */
    static function deleteItem($itemId)
    {
        require_once("../config.php");
        $query = 'DELETE FROM `news` WHERE id="' . $itemId . '"';
        $result = mysql_query($query);
        if (empty($result)) {
            return false;
        } else {
            return true;
        }
    }

    static function isExistsById($entryID)
    {
        require_once("../config.php");
        $query = 'SELECT * FROM news WHERE id = "' . $entryID . '" ';
        $result = mysql_query($query);
        if ($result) {
            $rowsCount = mysql_num_rows($result);
            return $rowsCount != 0;
        } else {
            error_log("Query error");
            return false;
        }
    }

    /**
     * Данный метод возвращает массив последних добавленных новостей в количестве 3 шт.
     * @return array
     */
    static function getItemsInformerByDate($limit)
    {
        require_once("./config.php");
        $result = mysql_query("SELECT * FROM `news` ORDER BY `date` DESC LIMIT 0, {$limit}");
        $assoc_array = array();
        if (!empty($result)) {
            $counter = 0;
            while ($row = mysql_fetch_array($result)) {
                $row['title'] = htmlspecialchars_decode($row['title']);
                $row['title'] = NewsMain::crop_str($row['title'], 30);
                $row['fullDescription'] = htmlspecialchars_decode($row['fullDescription']);
                $row['shortDescription'] = htmlspecialchars_decode($row['shortDescription']);
                $row['shortDescription'] = NewsMain::crop_str($row['shortDescription'], 100);
                $assoc_array[$counter] = $row;
                $counter++;
            }
        }
        return $assoc_array;
    }

    static function crop_str($string, $limit)
    {

        if (strlen($string) >= $limit) {
            $substring_limited = substr($string, 0, $limit);
            return substr($substring_limited, 0, strrpos($substring_limited, ' ')) . "...";
        } else {

//Если количество символов строки меньше чем задано, то просто возращаем оригинал
            return $string;
        }
    }

    static function crop_str_clear($string, $limit)
    {

        if (strlen($string) >= $limit) {
            $substring_limited = substr($string, 0, $limit);
            return substr($substring_limited, 0, strrpos($substring_limited, ' ')) . "";
        } else {

//Если количество символов строки меньше чем задано, то просто возращаем оригинал
            return $string;
        }
    }

    static function getNewsById($tableName, $id)
    {
        $result = mysql_query('SELECT * FROM ' . $tableName . ' WHERE id="' . $id . '"');
        if (!empty($result)) {
            return mysql_fetch_array($result);
        }
    }
    static function getPageByName($tableName, $name)
    {
        $result = mysql_query('SELECT * FROM ' . $tableName . ' WHERE url="' . $name . '"');
        if (!empty($result)) {
            return mysql_fetch_array($result);
        }
    }

}