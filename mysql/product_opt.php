<?php
  function __autoload($classname){
  include("class_".ucfirst($classname).".php");
}
$model = new ProductModel();
switch($_GET['opt']){
  case 'add' : $p = new Product($_POST);
    if($model->addProduct($p)){ //插入操作成功则自动跳转到product_index.php页面
      header("Location:product_index.php"); 
} else echo '添加商品失败,请<a href="product_index.php">返回</a>';
 break;
case 'modify' : $p = new Product($_POST);
    if($model->updateProduct($p)){
   header("Location:product_index.php");
} else echo '修改商品失败请<a href="product_index.php">返回</a>';
 break;
case 'del' : if($model->delProduct($_GET['pid'])) 
           header("Location:product_index.php");
   else echo '删除商品失败，请<a href="product_index.php">返回</a>';
 break;
}
?>
