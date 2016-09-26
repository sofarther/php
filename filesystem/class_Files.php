<?php
 class Files{
   private $name;
  private $size;
private $type;
 private $ctime;
function __construct($name){
   $this->name=$name;
   $this->size=filesize($name);
  $this->type=filetype($name);
 $this->ctime =filectime($name);
}
function copyfile($des){
  if(!(file_exists($des."/".basename($this->name)) && is_file($des."/".basename($this->name)))) copy($this->name,$des."/".basename($this->name));
 else{
      $i=1;
 while(file_exists($des."/".basename($this->name).$i)&& is_file($des."/".basename($this->name).$i)) $i++;
copy($this->name,$des."/".basename($this->name).$i);
}
}
function refile($newname){
  if(!(file_exists($newname) && is_file($newname))) {rename($this->name,$newname);
      $this->name=$newname;
}
 else {
  echo "文件名已存在";
  return;
}
}
function delfile(){
  unlink($this->name);
}


}
?>
