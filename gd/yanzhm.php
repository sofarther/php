<?php
 class yanzhm {
  private $width;
 private $height;
 private $num;
 private $allocchar;
private $canv;
function __construct($width,$heigh,$num=4){
  $this->width=$width;
  $this->height=$heigh;
 $this->num =$num;
 $this->allocchar =$this->createAllocChar();
}
function getCanv(){
 $this->canv = imagecreate($this->width,$this->height);
 $back=imagecolorallocate($this->canv,0xff,0xff,0xff);
$border=imagecolorallocate($this->canv,0,0,0);
imagefill($this->canv,0,0,$back);
imageRectangle($this->canv,0,0,$this->width-1,$this->height-1,$border);
}
function createAllocChar(){
 $chars=""; 
for($i=0; $i<$this->num;$i++){
 $number=rand(0,2);   
switch($number){
    case 0 : $ch = rand(97,122);
              break;
    case 1 : $ch = rand(48,57);
          break;
   case 2 : $ch = rand(65,90);
           break;
}
$chars.=sprintf("%c",$ch);  
}
return $chars;
}
function getCheckCode(){
  return $this->allocchar;
}
function getPixelLine(){
  for($i=0;$i<$this->num*10;$i++){
  $color = imagecolorallocate($this->canv,rand(0,255),rand(0,255),rand(0,255));
  imagesetpixel($this->canv,rand(0,$this->width),rand(0,$this->height),$color); 
//  imageline($this->canv,rand(0,$this->width),rand(0,$this->height),rand(0,$this->width),rand(0,$this->height),$color);
 
}
}
function printAllocChar(){
  $iwidth=intval($this->width/($this->num+2));
  $qheight = intval($this->height/3);
  $theight=$this->height-$qheight;
  for($i=1;$i<=$this->num; $i++){
    $color = imagecolorallocate($this->canv,rand(0,255),rand(0,255),rand(0,255));
  imagechar($this->canv,5,$iwidth*$i,rand(0,$theight),$this->allocchar[$i-1],$color);
}
}
function __destruct(){
  imagedestroy($this->canv);
}
function generateImage(){
$this->getCanv();
 $this->getPixelLine();
 $this->printAllocChar();
  $this->outputImage();
}
function outputImage(){
if(imagetypes()& IMG_GIF){
  header("Content-type: image/gif");
  imagegif($this->canv);
}
elseif(imagetypes()&IMG_PNG){
 header("Content-type: image/png");
imagepng($this->canv);
}
elseif(imagetypes()&IMG_JPG){
  header("Content-type: image/jpeg");
  imagejpeg($this->canv);
}
elseif(imagetypes()&IMG_WBMP){
  header("Content-type: image/wbmp");
  imagewbmp($this->canv);
}
else { die("PHP不支持该类型图像创建");
}
}
}
?>
