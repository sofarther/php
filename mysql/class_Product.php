<?php
 class Product{
  private $productID;
 private $name;
private $price;
private $description;
public function __construct($product=array()){
  foreach($product as $prop=>$value)
     $this->$prop=$value;
}
public function getID(){
if(!empty($this->productID))
  return $this->productID;
else return FALSE;
} 
public function getName(){
  if(!empty($this->name)) return $this->html2text($this->name);
 else return "未知商品名称";
}
public function getPrice(){
 if(!empty($this->price)) return $this->moneyFormat($this->price);
 else return "未知价格";
}
public function getSrcPrice(){
 
  return $this->price;

}
public function getDescription(){
 if(!empty($this->description)) return $this->html2text($this->description);
else return "该商品没有详细的描述";
}
private function html2text($str){
  return htmlspecialchars(stripslashes($str));
}
private function moneyFormat($money){
  return number_format($money,2,'.',',');
}
}
?>
