<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 20.04.2015
 * Time: 13:51
 */
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
class PagesSwitch {
    public $allEntries;
    public $pagesNum;
    public $startEntry;
    public $entriesOnPage;
    private $dbName;

    /**
     * @param $allEntries
     * @param $pagesNum
     * @param $startEntry
     * @param $entriesOnPage
     */
    function __construct($entriesOnPage=5, $dbName='news')
    {
        $this->entriesOnPage = $entriesOnPage;
        $this->dbName = $dbName;
        $this->init();
    }

    private function init () {
        $this->countAllEntries();
        $this->countPagesNum();
    }
    /**
     * Определяем общее число сообщений в базе данных
     */
    private function countAllEntries() {
        $result = mysql_query("SELECT * FROM {$this->dbName}");
        $this->allEntries = mysql_num_rows($result);
    }

    private function countPagesNum() {
        $this->pagesNum = intval(($this->allEntries - 1) / $this->entriesOnPage) + 1;
    }

    function displayPageSwitcher() {
        $path = $_SERVER['REQUEST_URI'];
        $re = "/\\D*\\d&\\D*\\d/";
        preg_match($re, $path, $matches);
        echo '<nav class="text-center">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>';

        for($i = 1; $i <= $this->pagesNum;$i++) {
            echo'<li><a href="'.$matches[0].'&page='.$i.'">'.$i.'</a></li>';
        }
echo  '<li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>';
    }

    function showItems($isCheckbox) {
        $page = $_REQUEST['page']==''?1:(int)$_REQUEST['page'];
        $page = mysql_real_escape_string(htmlspecialchars(strip_tags($page)));
        if($this->isPageExists())  {
            $this->startEntry = $page * $this->entriesOnPage - $this->entriesOnPage;
            $request = "SELECT * FROM {$this->dbName} LIMIT {$this->startEntry},{$this->entriesOnPage}";
            $result = mysql_query($request);
            $path = $_SERVER['REQUEST_URI'];
            if($_REQUEST['page']=='') {
                $re = "/\\D*\\d&\\D*\\d/";
            } else {
                $re = "/\\D*\\d&\\D*\\d&\\D*\\d/";
            }
            preg_match($re, $path, $matches);
            while ($row = mysql_fetch_array($result)) {
                echo "<tr>
				<td>" . $row['id'] . "</td>
				<td><a href=" . $matches[0] . '&id=' . $row['id'] . ">" . $row['title'] . "</a></td>";
                if($isCheckbox) {
                    echo "<td>" . $row['author'] . "</td>";
                }
                echo "
				<td>" . $row['date'] . "</td>
                ";
                if($isCheckbox) {
                    echo '<td><div class="input-group text-center center-block" style="margin:0">
        <input type="checkbox" name="checkItem[]" multiple value="'.$row['id'].'">
</div></td>';
                }
                echo "</tr>";
            }
        }
    }

    function showItemsPages() {
        $page = $_REQUEST['page']==''?1:(int)$_REQUEST['page'];
        $page = mysql_real_escape_string(htmlspecialchars(strip_tags($page)));
        if($this->isPageExists())  {
            $this->startEntry = $page * $this->entriesOnPage - $this->entriesOnPage;
            $request = "SELECT * FROM {$this->dbName} LIMIT {$this->startEntry},{$this->entriesOnPage}";
            $result = mysql_query($request);
            $path = $_SERVER['REQUEST_URI'];
            if($_REQUEST['page']=='') {
                $re = "/\\D*\\d&\\D*\\d/";
            } else {
                $re = "/\\D*\\d&\\D*\\d&\\D*\\d/";
            }
            preg_match($re, $path, $matches);
            while ($row = mysql_fetch_array($result)) {
                echo "<tr>
				<td>" . $row['id'] . "</td>
				<td><a href=" . $matches[0] . '&id=' . $row['id'] . ">" . $row['title'] . "</a></td>
				<td>" . $row['date'] . "</td>

			</tr>";
            }
        }
    }

    function showUserItems() {

        $page = $_REQUEST['page']==''?1:(int)$_REQUEST['page'];
        $page = mysql_real_escape_string(htmlspecialchars(strip_tags($page)));
        if($this->isPageExists())  {
            $this->startEntry = $page * $this->entriesOnPage - $this->entriesOnPage;
            $request = "SELECT * FROM {$this->dbName}  ORDER by `id` LIMIT {$this->startEntry},{$this->entriesOnPage}";
            $result = mysql_query($request);
            $path = $_SERVER['REQUEST_URI'];
            $re = "/\\D*\\d&\\D*\\d&\\D*\\d/";
            preg_match($re, $path, $matches);
            while($row = mysql_fetch_array($result))
            {
                extract($row);
                $skype = empty($skype)?"Empty":$skype;
                echo "<tr>
				<td>$id</td>
				<td>$login</td>
				<td>$password</td>
				<td>$date</td>
				<td>$gender</td>
				<td>$skype</td>
				<td>$mail</td>
			</tr>";
            }
        }
    }

    public function isPageExists() {
        $page = $_REQUEST['page']==''?0:(int)$_REQUEST['page'];
        $page = mysql_real_escape_string(htmlspecialchars(strip_tags($page)));
        if($page > $this->pagesNum) {
            return false;
        } else {
            return true;
        }
    }

    function getItemsLimited() {
        $page = $_REQUEST['page']==''?1:(int)$_REQUEST['page'];
        $page = mysql_real_escape_string(htmlspecialchars(strip_tags($page)));
        if($this->isPageExists())  {
            $this->startEntry = $page * $this->entriesOnPage - $this->entriesOnPage;
            $request = "SELECT * FROM {$this->dbName} ORDER BY date DESC LIMIT {$this->startEntry},{$this->entriesOnPage}";
            $result = mysql_query($request);
            $path = $_SERVER['REQUEST_URI'];
            if($_REQUEST['page']=='') {
                $re = "/\\D*\\d&\\D*\\d/";
            } else {
                $re = "/\\D*\\d&\\D*\\d&\\D*\\d/";
            }
            preg_match($re, $path, $matches);
            $assoc_array = array();
            $counter = 0;
            while ($row = mysql_fetch_array($result)) {
                $row['title'] = htmlspecialchars_decode($row['title']);
                $row['fullDescription'] = htmlspecialchars_decode($row['title']);
                $row['author'] = htmlspecialchars_decode($row['author']);
                $row['shortDescription'] = htmlspecialchars_decode($row['shortDescription']);
                $row['uri'] = $matches[0];
                $assoc_array[$counter] = $row;
                $counter++;
            }
        }
        return $assoc_array;
    }

    function getData() {
        $data = array();
        $path = $_SERVER['REQUEST_URI'];
        $re = "/\\D*\\d&\\D*\\d/";
        preg_match($re, $path, $matches);
        foreach($this as $key => $value) {
            $data[$key] = $value;
        }
        $data["matches"] = $matches[0];
        return $data;
    }

    public static function getUserData() {
        $userName = $_REQUEST['uname']==''?0:$_REQUEST['uname'];
        $userName = mysql_real_escape_string(htmlspecialchars(strip_tags($userName)));
        $query = "SELECT `id`, `login`, `date`, `gender`, `skype`, `mail`, `isBanned` FROM `users` WHERE login='".$userName."'";
        $result = mysql_query($query);

        if(!empty($result)) {
            return mysql_fetch_array($result);
        }

    }
    public function getUserNews() {
            $page = $_REQUEST['page']==''?1:(int)$_REQUEST['page'];
            $page = mysql_real_escape_string(htmlspecialchars(strip_tags($page)));
            if($this->isPageExists())  {
                $this->startEntry = $page * $this->entriesOnPage - $this->entriesOnPage;
                $author = $_SESSION['authorization']['username'];
                $request = "SELECT title, date, url FROM {$this->dbName} WHERE author='".$author."'  ORDER BY date DESC LIMIT {$this->startEntry},{$this->entriesOnPage}";
                $result = mysql_query($request);
                $path = $_SERVER['REQUEST_URI'];
                if($_REQUEST['page']=='') {
                    $re = "/\\D*\\d&\\D*\\d/";
                } else {
                    $re = "/\\D*\\d&\\D*\\d&\\D*\\d/";
                }
                preg_match($re, $path, $matches);
                $assoc_array = array();
                $counter = 0;
                while ($row = mysql_fetch_array($result)) {
                    $row['title'] = htmlspecialchars_decode($row['title']);
                    $row['uri'] = $matches[0];
                    $assoc_array[$counter] = $row;
                    $counter++;
                }
            }
            return $assoc_array;
    }

}