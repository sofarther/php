<?php
 require "class_Shape.php";
 class Rect implements Shape{
  private $width;
  private $height;
 function __construct($width=1,$height=1){
   $this->width=$width;
  $this->height=$height;
}
function area(){
  return $this->width * $this->height;
}
function perimeter(){
  return $this->width*2+$this->height*2;
}
}
?>
