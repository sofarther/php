<?php
  class ProductModel extends MyDB {
  function addProduct($product){
  $query = "insert into products(name,price,description) values(?,?,?)";
   $stmt = $this->mysqli->prepare($query);
   $name=$product->getName();
  $price = $product->getPrice();
  $description=$product->getDescription();
    $stmt->bind_param('sds',$name,$price,$description);
 $stmt->execute();
if($stmt->affected_rows!=1){
  $this->printError("插入数据失败： ".$stmt->error);
 return false;
}else{
  return $this->mysqli->insert_id;
}
}
function delProduct($productID){
  $query="delete from products where productID='".$productID."'";
 if($this->mysqli->query($query)){
  return true;
}
else{
  $this->printError("删除数据失败：".$this->mysqli->error);
 return false;
}
}
function updateProduct($product){
 $query="update products set name=?,price=?,description=? where productID=?";
 $stmt = $this->mysqli->prepare($query);
 $productID = $product->getID();
 $name = $product->getName();
 $price = $product->getSrcPrice();
$description = $product->getDescription();
$stmt->bind_param('sdsi',$name,$price,$description,$productID);
$stmt->execute();
if($stmt->affected_rows !=1){
  $this->printError("修改数据失败：".$stmt->error);
 exit();
}
else { return true;}
}
function selectSingleProduct($productID){
   $query = "select * from products where productID='".$productID."'";
 if( $res = $this->mysqli->query($query)){
    if($row = $res->fetch_assoc()){
      $product = new Product($row);
   $res->close();
  return $product;
}
 else { $res->close();
  $this->printError("获取单行数据失败！");
  return false;
}
 
} else {
  $this->printError("数据查询失败：".$this->mysqli->error);
  return false;
}
}
 function selectAllProduct(){
  $query = "select * from products order by productID";
 if($res = $this->mysqli->query($query)){
  if($res->num_rows){  //判断是否有记录
   while($row=$res->fetch_assoc()){
    $allProduct[]= new Product($row);     
} 
  $res->close();
 return $allProduct;
}
 else{
  $res-close();
  $this->mysqli->printError("没有获取到任何记录");
  return false;
}
} else{
    $this->printError("查询失败：".$this->mysqli->error);
  return false;
}
}
}
?>
