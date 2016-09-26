<?php
function __autoload($classname){
  include("class_".ucfirst($classname).".php");
}
 if(isset($_POST['add'])){
   $title = "添加商品";
  $view =FALSE;
 
}
else if(isset($_GET['opt']) && isset($_GET['pid']) ){
 $model = new ProductModel();
$product = $model->selectSingleProduct($_GET['pid']);
$title = "修改商品";
$view = TRUE;
}
?>
  <form action ="product_opt.php?opt=<?php echo $view? 'modify':'add';?>" method="post"> 
<!--通过传递$_GET参数判断何种操作-->
<table align="center" width="600px" border="0px">
 <caption><h3><?php echo $title  ?> </h3></caption>
<tr> 
 <td>商品名称：</td>
 <td><input type="text" name="name" value="<?php echo $view ? $product->getName():''; ?>" ></td>
</tr>
<tr>
 <td>价&nbsp;&nbsp;格: </td>
<td>
<input type="text" name="price" value="<?php echo $view? $product->getSrcPrice():''; ?>" ></td>
</tr><tr>
<td>描&nbsp;&nbsp;述:</td>
<td>
<textarea rows="4" cols="20" name="description" >
 <?php echo $view? $product->getDescription():""; ?>
</textarea>
</td></tr>
<tr><td colspan="2" align="center">
<input type="submit" name="sub" value="提交">
<input type="reset" name="reset" value="重置">
</td>
</tr>
<tr><td><input type="hidden" name="productID" value="<?php echo $view? $product->getID():''; ?>"> </td><tr/>
</table>
</form>

