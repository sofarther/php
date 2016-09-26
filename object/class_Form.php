<?php
 class Form{
  private $formName;
  private $request;
 private $action;
 private $method;
 private $target;
function __construct($formName,$request,$action="shape.php",$method="post",$target="_self"){
   $this->formName=$formName;
  $this->request=$request;
 $this->action=$action;
 $this->method=$method;
 $this->target=$target;
}
  function __toString(){
    $str="<table width='400px' border='0px' align='center'>";
    $str.='<caption><h3>'.$this->formName."</h3></caption>";
    $str.="<form action='".$this->action."' mehtod='".$this->method."' target='".$this->target."'>";
   switch($this->request["action"]){
   case 1: $str.="<tr><td>长：</td><td><input type='text' name='width' value='".$this->request["width"]."'/></td></tr>";
         $str.="<tr><td>宽：</td><td><input type='text' name='height' value='".$this->request["height"]."'/></td><tr/>";
  break;
 case 2 : $str.="<tr><td>半径：</td><td><input type='text' name='radius' value=' ".$this->request["radius"]."'/></td></tr>";
  break;
 case 3: $str.="<tr><td>第一条边：</td><td><input type='text' name='side1' value='".$this->request["side1"]."'/></td></tr>";
         $str.="<tr><td>第二条边：</td><td><input type='text' name='side2' value='".$this->request["side2"]."'/></td></tr>";
  $str.="<tr><td>第三条边：</td><td><input type='text' name='side3' value='".$this->request["side3"]."'/></td></tr>";
 break;
}
$str.="<tr><td align='center'colspan='2'><input type='submit' value='计算'></td></tr>";
$str.="<input type='hidden' name='action' value='".$this->request['action']."'>";
$str.="<input type='hidden' name='act' value='".$this->request["action"]."'>";
$str.="</form></table>";
return $str;
}
}

?>
