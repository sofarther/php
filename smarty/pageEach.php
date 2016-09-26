<?php
require 'smarty_conf.inc.php';
/*;
  function __autoload($classname){
   require_once('class_'.ucFirst($classname).'.php');
}
*/
require 'class_Page.php';
require 'class_MyDB.php';
require 'class_StuModel.php';
if(!$tpl->isCached('pageEach.php',$_GET['id'])){
$student = new StuModel();
$rowNum = $student->getRowCount();
if($rowNum!=0){
  $pageRow=5;
  $pageCount=ceil($rowNum/$pageRow);
 $page = new Page($pageCount,$pageRow);
  if(isset($_GET['id'])){
    $page->setCurrent($_GET['id']);
}
$student->getResult($page->getOffset(),$page->pageRow);
if($page->currentPage==$page->pageCount){
  $pageEnd = $rowNum;
}
else $pageEnd = $page->getEnd();
$tpl->assign('caption',$student->getCaption());
$tpl->assign('fields',$student->getFields());
$tpl->assign('rows',$student->getRows());
$tpl->assign('current',$page->currentPage);
$tpl->assign('next',$page->getNext());
$tpl->assign('prev',$page->getPrev());
$tpl->assign('pageCount',$page->pageCount);
$tpl->assign('offset',$page->getOffset());
$tpl->assign('end',$pageEnd);
$tpl->display('page.tpl',$_GET['id']);
}
}
?>
