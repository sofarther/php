<?php
 class Page{
    private $currentPage;
   private $pageCount;
   private $pageRow;
  function __construct($pageCount,$pageRow=5){
   $this->pageCount=$pageCount;
   $this->pageRow = $pageRow;
   $this->currentPage=0;
}

function getNext(){
  if($this->currentPage==$this->pageCount){
    return $this->pageCount;
}
 return $this->currentPage+1;
}
function setCurrent($p){
  $this->currentPage=$p;
}
function getPrev(){
  if($this->currentPage==0){
   return 0;
}
 return $this->currentPage-1;
}
function getOffset(){
  return $this->currentPage*$this->pageRow;
}
function __get($paramName){
  return $this->$paramName;
}
function getEnd(){
  return ($this->currentPage+1)*$this->pageRow-1;
}
}
?>
