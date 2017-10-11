<?php
/*
 * �ļ����ݷ�ҳ������
 * 
 * */

 //  ��ҳ  ��һҳ  1 2 3 4 5 6 7 8  ��һҳ  ĩҳ
class StrPage{
	private $file;//�ļ�����
	private $current;//��ǰҳ
	private $totalPage;//��ҳ��
	private $url;//url��ַ
	private $pageLen;//ÿҳ��ʾ���ݳ���
	
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
		$url = parse_url($_SERVER['REQUEST_URI']);//����url��ַ���������һ������
		parse_str($url['query'],$queryArr);//�����ǵĴ��α��һ������
		unset($queryArr['page']);//ɾ��������page��
		$queryStr = http_build_query($queryArr);//������ָ����ַ���
		return $url['path'].'?'.$queryStr.'&page=';
	}
	
//	ҳ��
	private function first(){
		if($this->current>1) return "<a href='".$this->url."1'>��ҳ&nbsp;&nbsp;</a>";
	}
	private function pre(){
		if($this->current>1) return "<a href='".$this->url.($this->current-1)."'>��һҳ&nbsp;&nbsp;</a>";
	}
	private function next(){
		if($this->current<$this->totalPage) return "<a href='".$this->url.($this->current+1)."'>��һҳ&nbsp;&nbsp;</a>";
	}
	private function end(){
		if($this->current<$this->totalPage) return "<a href='".$this->url.$this->totalPage."'>ĩҳ&nbsp;&nbsp;</a>";
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
	
//	ҳ����
	public function pageStyle($style=1){
		switch($style){
			case 1:
				return "����".$this->totalPage."ҳ&nbsp;&nbsp;&nbsp;&nbsp;".$this->first().$this->pre().$this->pageList().$this->next().$this->end();
				break;
			case 2:
				return $this->first().$this->pre().$this->pageList().$this->next().$this->end();
				break;
			case 3:
				return $this->pageList();
				break;
		}
	}
	
//	���·�ҳ��ȡ
	public function getContents(){
		$prePageLen = strlen($this->subStrs($this->current-1));
		$currentPageLen = strlen($this->subStrs($this->current));
		return substr($this->file,$prePageLen,$currentPageLen-$prePageLen);
	}
	
//	��ֹ�ַ�����ȡ����
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