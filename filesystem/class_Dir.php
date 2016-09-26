<?php
  class Dir{
    private $name;
    private $size;
    private $type;
   private $time;
 function __construct($name="."){
   $this->name=$name;
   $this->size=filesize($this->name);
   $this->type=filetype($this->name);
  $this->time=filectime($this->name);
}
function uploadfile($tmp_name,$filename){
  move_uploaded_file($tmp_name,$this->name."/".time().$filename);
}
function showfiles(){
 if($this->name ==='..') $curDir="\$ROOT/";
  else if($this->name ==='.') $curDir="\$START/";
  else if(preg_match('/^\.([^\.]+?)/',$this->name)) {
  
  $curDir = preg_replace('/^\.(.*)/','$START\\1/',$this->name);
}else if(preg_match('/^\.\.([^\.]*)/',$this->name)){
   $curDir =preg_replace('/^\.\.(.*)/','$ROOT\\1/',$this->name);
 }
 
  echo '<table width="850px" align="center" border="0px" cellspacing="5px" cellpadding="5px">';
 echo '<caption align="left">当前目录为：'.$curDir.'</cpation>';
 echo '<tr  bgcolor="#dddddd"><th>文件名</th><th>类型</th><th>大小</th><th>创建时间</th><th>文件操作</th></tr>';
$sum=0;
$fp=opendir($this->name) or die("无法打开该目录：".$this->name);
while($file=readdir($fp)){
if($file !="." && $file!=".."){
 if(!preg_match('/^\.|~$/',$file)){
$file_arr[$sum++]=$file;
}
}
}
closedir($fp);
if(isset($file_arr)){ //判断是否为空文件夹
foreach($file_arr as $i => $filename){
  $type[$i] = filetype($this->name."/".$filename);
}
array_multisort($type,$file_arr);
for($num=0; $num<count($file_arr);$num++){
  $dirfile=$this->name."/".$file_arr[$num];
  if($num%2==0) $bgcolor="#ffffff";
  else $bgcolor="#dddddd";
 if(is_dir($dirfile)) {$fc ="aqua";
   $file_arr[$num].="/";
}
 else if(is_file($dirfile)) $fc="black";
 if(strlen($file_arr[$num])>20){
  $filename=$file_arr[$num];
  $file_arr[$num]=mb_substr($file_arr[$num],0,8,'utf-8').'...'.mb_substr($file_arr[$num],intval((strrpos($file_arr[$num],'.')-4)/3),intval(strlen($file_arr[$num])/3)+1,'utf-8');
}
 echo '<tr bgcolor="'.$bgcolor.'" ><td ><span  title="'.$filename.'"><font color="'.$fc.'">'.$file_arr[$num].'</font></span></td><td><font color="'.$fc.'">'.filetype($dirfile).'</font></td><td>'.round(filesize($dirfile)/1024,2).' KB</td><td>'.date("M j ,Y",filectime($dirfile))."</td>";
echo '<td><a href="operator_get.php?op=0&name='.$dirfile.'" target="_parent">复制</a>/';
echo '<a href="operator_get.php?op=1&name='.$dirfile.'" target="_parent">重命名</a>/';
echo '<a href="filesystem.php?op=2&name='.$dirfile.'" target="_self">删除</a>/';
if(is_dir($dirfile)) echo '<a href="filesystem.php?op=3&name='.$dirfile.'" target="_self">进入</a>/';
if(is_file($dirfile)){
echo '<a href="operator_get.php?op=4&name='.$dirfile.'" target="_parent">编辑</a>/';
echo '<a href="operator_get.php?op=5&name='.$dirfile.'" target="_parent">下载</a>/';
}
echo "</td></tr>";
}
}
echo "</table>";
echo "<br/>";
echo "<center> <i> 该目录共有：</i>".$sum."<i>个文件和目录</i></center><br/>";

}
function createdir(){
if(!(file_exists($this->name."/newfolder") &&is_dir($this->name."/newfolder"))) mkdir($this->name."/newfolder");
else{ $i=1;
  while(file_exists($this->name."/newfolder".$i)&&is_dir($this->name."/newfolder".$i))$i++;
  mkdir($this->name."/newfolder".$i);
}
//$this->showfiles();
}
function newfile(){
  $dirfile=$this->name."/newfile";
if(!(file_exists($dirfile)&& is_file($dirfile))){ $fp=fopen($dirfile,"x") or die("无法创建新文件") ;
}
else{ $i=1;
 while(file_exists($dirfile.$i) && is_file($dirfile.$i)) $i++;
 $fp=fopen($dirfile.$i,"x") or die("无法创建新文件") ;
}
fclose($fp);
$this->showfiles();
}
function copydir($srcdir,$desdir){
 if(!(file_exists($desdir) && is_dir($desdir))) mkdir($desdir);
else{
  echo "目的目录名已存在,请重新输入";
  return;
} 
$fp=opendir($srcdir) or die("无法打开该目录:".$srcdir);
while($file=readdir($fp)){
  if($file !="." && $file !=".."){
   $dirsrc=$srcdir."/".$file;
   $dirdes=$desdir."/".$file;
  if(is_dir($dirsrc)) $this->copydir($dirsrc,$dirdes);
  if(is_file($dirsrc)) copy($dirsrc,$dirdes);
}
}
closedir($fp);

}
function deldir($dir){
  $fp=opendir($dir) or die("无法打开该目录:".$dir);
 while($file=readdir($fp)){
  if($file !="." && $file !=".."){
    $dirfile=$dir."/".$file;
   if(is_dir($dirfile)) $this->deldir($dirfile);
  if(is_file($dirfile)) unlink($dirfile);
}
}
closedir($fp);
rmdir($dir);
//$this->showfiles();
}
function cddir(){
  $this->showfiles();
 return $this->name;
}
function redir($newname){
  if(!(file_exists($newname) && is_dir($newname)) ){
    rename($this->name,$newname);
   $this->name=$newname;
}
else {
   echo "文件名已存在,请重新命名";
   return;
}
}
}
?>
