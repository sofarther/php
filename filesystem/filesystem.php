<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>
<center><h2>文件目录操作系统</h2>
</center>
<hr>
<?php
function __autoload($classname){
 require('class_'.ucfirst($classname).'.php');
}

$currentDir=".";
 if(isset($_GET['op']) &&isset($_GET['name'])){
   if($_GET['op']==3 || $_GET['op']==9 || $_GET['op']==10 || $_GET['op']==11
      ||$_GET['op']==6 || $_GET['op']==7 ||$_GET['op']==8){
    $currentDir=$_GET['name'];
}
}

echo '<a href="operator_get.php?op=6&name='.$currentDir.'" target="_parent">上传文件</a> || ';
echo '<a href="filesystem.php?op=7&name='.$currentDir.'" target="_self">新建文件夹</a> || ';
echo '<a href="filesystem.php?op=8&name='.$currentDir.'" target="_self">创建文件</a> || ';
echo '<a href="filesystem.php?op=9&name='.($currentDir==='.'?'..':dirname($currentDir)).'" target="_self">上级目录</a> || ';
echo '<a href="filesystem.php?op=10&name=."  target="_self">开始目录</a> || ';
echo '<a href="filesystem.php?op=11&name=.." target="_self">文档根目录</a>';
?>
<hr/>


<?php
if(isset($_GET['op']) && isset($_GET['name'])){
$operator = new Operation($_GET['name']);  
switch($_GET['op']){
   case 2: $operator->opt_del();
     break;
   case 7: $operator->opt_createdir();
     break;
   case 8 : $operator->opt_createfile();
   break;
  case 3 :
  case 9:
 case 10:
 case 11: 
  $operator->opt_cddir();
   break;
}
}
elseif(isset($_POST['op']) && isset($_POST['filename'])){
  $operator = new Operation($_POST['filename']);
 switch($_POST['op']){
  case 0 : 
   $operator->opt_copy($_POST['cpdes']);
   break;
  case 1 :
  $operator->opt_rename($_POST['rname']);
 break;
  case 4 :
 $operator->opt_edit($_POST['content']);
 break;
 case 6 :
 $operator->opt_upload($_FILES['myfile']['tmp_name'],$_FILES['myfile']['name']);
 break;
}
}

else{
   $dir = new Dir($currentDir);
  $dir->showfiles();
}
?>


</body>

</html>
