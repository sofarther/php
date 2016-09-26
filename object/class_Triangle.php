<?php
  require "class_Shape.php";
 class Triangle implements Shape{
private  $side1;
private  $side2;
private  $side3;

function __construct($side1=1,$side2=1,$side3=1){
  $this->side1=$side1;
 $this->side2=$side2;
 $this->side3=$side3;
}
  function area(){
  $s=($this->side1+$this->side2+$this->side3)/2;
  return sqrt($s*($s-$this->side1)*($s-$this->side2)*($s-$this->side3));
}
 function perimeter(){
  return $this->side1+$this->side2+$this->side3;
}
}
?>
