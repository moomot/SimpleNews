<?php
if (!defined("SIMPLENEWS")){ die("Hacker..."); }
class Tabs_inner{
	
	public $menus = array();		
	public $content = array();
	private $path;
	
	function __construct($path){
		$this->path=$path;
	}
	function selected_tab($page,$index){
		echo '<li class="active"><a href="'.$this->path.'&op='.$index.'">'.$page.'</a></li>';					
	}
	function tabs($page,$index){						
    	echo '<li><a href="'.$this->path.'&op='.$index.'">'.$page.'</a></li>';
	}
	function err()
	{
		echo '<div class="alert alert-danger alert-nav">Invalid page number!</div>';
	}
	
	function render_tabs($sel){
		$length=count($this->menus);
		if($sel>$length-1) 
		{
			$this->err();
		} else 
		{
			echo '<ul class="nav nav-pills nav-stacked">';
			for($i=0;$i<$length;$i++){
				if($sel==$i){
					$this->selected_tab($this->menus[$i],$i);
				}						
				if($sel!=$i && $i==0){							
					$this->tabs($this->menus[$i],$i);
				}
				if($sel!=$i && $i!=0 && $i!=($sel+1)){
					$this->tabs($this->menus[$i],$i);
				}
				if($sel!=$i && $i!=0 && $i==($sel+1)){							
					$this->tabs($this->menus[$i],$i);
				}
			}
			echo '</ul>';
		}

	}
	function add_tabs($new_page,$new_content){
		array_push($this->menus, $new_page);
		array_push($this->content,$new_content);
	}
	function render_content($sel){
		$length=count($this->menus);
		if($sel>$length-1) 
		{
			exit;
		}
		require_once($this->content[$sel]);
	}
}