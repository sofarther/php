<?php
 class Operation{
private $filename;
private $filetype;
private $filepath; 
 function __construct($filenm){
  $this->filename=$filenm;
 $this->filetype=filetype($filenm);
 $this->filepath=dirname($filenm);
/*
 switch($opt){
 case 0: 
 echo "<h3>copy ".$this->filetype.'</h3><hr>';
echo '<form action="" method="post"> ';
echo '源&nbsp;&nbsp;路径：&nbsp;&nbsp;<u><b> '.$this->name.'</b></u><br/>';
echo '目标路径：&nbsp;&nbsp;<input type="text" name="cpdes"><br/> ';
echo '<input type="submit" name="sub" value="确定">&nbsp;&nbsp;';
echo '<input type="reset" value="重置">';
echo '</form>';
break;
 case 1 :
 echo "<h3>rename ".$this->filetype."</h3><hr>";
 echo '<form action="" method="post">';
 echo '原文件名：&nbsp;&nbsp;<u><b>'.basename($this->name).'</b></u><br/>';
 echo '新文件名：&nbsp;&nbsp;<input type="text" name="rname"<br/> ';
 echo '<input type="submit" name="sub" value="确定">&nbsp;&nbsp;';
echo '<input type="reset" value="重置">';
echo "</form>"; 
break;
 case 2:
   $this->opt_del();
  break;
case 3: $this->opt_cddir(); break;
case 4 : $this->opt_edit(); break;
case 5 : $this->opt_download(); break;
}
*/
}

function __autoload($classname){
  include("class_".ucfirst($classname).".php");
}
function opt_copy($desdir){
  if(substr($desdir,0,1)==="/") $desdir='..'.$desdir;
  else $desdir='./'.$desdir;
$dir =new Dir($this->filepath);
if(is_dir($this->filename)){
  
  $dir->copydir($this->filename,$desdir.'/'.basename($this->filename));
}
if(is_file($this->filename)){
 $file = new Files($this->filename);
 $file->copyfile($desdir);
}
$dir->showfiles();
}
function opt_rename($newname){
 if(is_dir($this->filename)) {
  $dir = new Dir($this->filename);
 $dir->redir($this->filepath."/".$newname);
}
if(is_file($this->filename)){
 $file=new Files($this->filename);
 $file->refile($this->filepath."/".$newname);
}
$p =new Dir($this->filepath);
$p->showfiles();
}
function opt_del(){
  $dir =new Dir($this->filepath);
 if(is_dir($this->filename)) $dir->deldir($this->filename);
if(is_file($this->filename)) {
  $file = new Files($this->filename);
 $file->delfile();

}
$dir->showfiles();
}
function opt_cddir(){
 $dir = new Dir($this->filename);
 return $dir->cddir();
}
function opt_edit($content){
$dir = new Dir($this->filepath);
 file_put_contents($this->filename,$content);
$dir->showfiles();
 
}
function opt_upload($tmpname,$sname){
  $dir = new Dir($this->filename);
 $dir->uploadfile($tmpname,$sname);
 $dir->showfiles();
}
function opt_createdir($flag=false){
  $dir = new Dir($this->filename);
 $dir->createdir();
if(!$flag){ //在一般情况下新建目录
  $dir->showfiles();
}else{ //在复制文件时，新建目录
  $this->opt_showdes();
}
}
function opt_createfile(){
$dir = new Dir($this->filename);
 $dir->newfile();
}
function opt_cdparentDir(){
  $dir = new Dir($this->filename);
 $dir->showfiles();
}
function opt_cdstartDir(){
  $dir = new Dir($this->filename);
 $dir->showfiles();
}
function opt_showdes(){
echo "选择目的目录";
 echo "<hr/>";
  echo '<a href="operator_get.php?op=7&name='.$this->filename.'" target="_self">新建文件夹</a> || ';
 echo '<a href="operator_get.php?op=9&name='.($this->filename ==='.'?'..':dirname($this->filename)).'" target="_self">上级目录</a>  ';

echo "<hr/>";

  $subdir = scandir($this->filename);
echo "<table width='400px' border='0px' align='center'>";
  $key=0;
 foreach($subdir as  $name){
  if($name !='.' && $name !='..'){
   $dirname=$this->filename."/".$name;
if( is_dir($dirname)){
    if($key++%2){
        $bgcolor="#dddddd";
   }else{
     $bgcolor="#ffffff";
   }
echo "<tr bgcolor='$bgcolor'><td>$name</td><td><a href='operator_get.php?op=9&name=$dirname'>进入</a></td></tr>";
  }
}
}
 echo "</table><br/>";
 echo "<center><a href='operator_get.php?op=3&name={$this->filename}'>粘贴到此处</a></center>";
}
 
}
?>
