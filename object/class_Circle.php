<?php
 require("class_Shape.php");
 class Circle implements Shape{
  private $rad;
function __construct($rad=1){
   $this->rad=$rad;
}
function area(){
  return M_PI * $this->rad * $this->rad;
}
function perimeter(){
  return M_PI *2* $this->rad;
}
}
?>
