<?php

 require("header.inc.php");
function __autoload($classname){
  include("class_".ucfirst($classname).".php");
}
$model = new ProductModel();
$products = $model->selectAllProduct();
if($products){
echo '<table width="800px" align="center" border="1px" cellspacing="0px" cellpadding="0px"> ';
echo '<caption> 商品列表</caption>';
echo '<tr><th>商品名称</th><th>价格</th><th>描述</th><th>操作</th></tr>';

foreach($products as $product){
 echo "<tr>";
  echo "<td>".$product->getName()."</td>"."<td>".$product->getPrice()."</td>"."<td>".$product->getDescription()."</td>";
 echo "<td>";
 echo '<a href="product_opt_view.php?opt=modify&pid='.$product->getID().'">修改</a>/';
echo '<a href="product_opt.php?opt=del&pid='.$product->getID().'">删除</a>';
echo "</td></tr>";
}
echo "</table>";
}
?>
<center>
<form action="product_opt_view.php" method="post" target="_blank">
 <input type="submit" name="add" value="添加">
</form>
</center>
<?php
require('footer.inc.php');
?>
