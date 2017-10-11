<?php
/*
 * 文件内容分页操作类
 * 
 * */

 //  首页  上一页  1 2 3 4 5 6 7 8  下一页  末页
class StrPage{
	private $file;//文件内容
	private $current;//当前页
	private $totalPage;//总页数
	private $url;//url地址
	private $pageLen;//每页显示内容长度
	
	function __construct($file,$len){
		$this->file = file_get_contents($file);
		$this->current = isset($_GET['page'])?$_GET['page']:1;
		$this->pageLen = $len;
		$this->totalPage = $this->getTotalPage();		
		$this->url = $this->getUrl();
	}
	
	private function getTotalPage(){
		return ceil(strlen($this->file)/$this->pageLen);
	}
	private function getUrl(){
		$url = parse_url($_SERVER['REQUEST_URI']);//解析url地址，把它变成一个数组
		parse_str($url['query'],$queryArr);//把我们的传参变成一个数组
		unset($queryArr['page']);//删除数组中page项
		$queryStr = http_build_query($queryArr);//把数组恢复成字符串
		return $url['path'].'?'.$queryStr.'&page=';
	}
	
//	页码
	private function first(){
		if($this->current>1) return "<a href='".$this->url."1'>首页&nbsp;&nbsp;</a>";
	}
	private function pre(){
		if($this->current>1) return "<a href='".$this->url.($this->current-1)."'>上一页&nbsp;&nbsp;</a>";
	}
	private function next(){
		if($this->current<$this->totalPage) return "<a href='".$this->url.($this->current+1)."'>下一页&nbsp;&nbsp;</a>";
	}
	private function end(){
		if($this->current<$this->totalPage) return "<a href='".$this->url.$this->totalPage."'>末页&nbsp;&nbsp;</a>";
	}
	private function pageList(){
		for($i=1;$i<=$this->totalPage;$i++){
			if($i==$this->current){
				@$pageListStr .= $i."&nbsp;&nbsp;";
			}else{
				@$pageListStr .= "<a href='".$this->url.$i."'>".$i."</a>&nbsp;&nbsp;";
			}			
		}
		return @$pageListStr;
	}
	
//	页码风格
	public function pageStyle($style=1){
		switch($style){
			case 1:
				return "共有".$this->totalPage."页&nbsp;&nbsp;&nbsp;&nbsp;".$this->first().$this->pre().$this->pageList().$this->next().$this->end();
				break;
			case 2:
				return $this->first().$this->pre().$this->pageList().$this->next().$this->end();
				break;
			case 3:
				return $this->pageList();
				break;
		}
	}
	
//	文章分页截取
	public function getContents(){
		$prePageLen = strlen($this->subStrs($this->current-1));
		$currentPageLen = strlen($this->subStrs($this->current));
		return substr($this->file,$prePageLen,$currentPageLen-$prePageLen);
	}
	
//	防止字符串截取乱码
	private function subStrs($page){
		$len = $page*$this->pageLen;
		for($i=0;$i<$len;$i++){
			if(ord(substr($this->file,$i,1))>0xa0){
				@$string .= substr($this->file,$i,2);
				$i++;
			}else{
				@$string .= substr($this->file,$i,1);
			}
		}
		return @$string;
	}
}

$php = new StrPage('75.txt',2000);
echo $php->getContents();
echo "<hr/>";
echo $php->pageStyle();











































?>