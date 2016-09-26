<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
 <title>简单计算器</title>
</head>
<body>
 <?php
//无论是第一次打开该页面，还是submit提交，都会执行php代码
// 因此需要判断是怎样打开该页面
if(isset($_POST['num1'])&& isset($_POST['num2'])){
     if(empty($_POST['num1'])){
                echo "<font color='red'>第一个操作数不能为空!</font><br/>";
               unset($_POST['sub']);
                } 
     if(empty($_POST['num2'])){
                echo "<font color='red'>第二个操作数不能为空!</font><br/>";
               unset($_POST['sub']);
                } 
     $opter=$_POST['opter'];
    $num1=$_POST['num1'];
   $num2=$_POST['num2'];
   if($opter=="/"||$opter=="%"){
        if($num2==0){
          echo "<font color='red'>0不能作为除数！</font><br/>";
           unset($_POST['sub']);
          }
   }
}

?>
<table border="1" align="center" width="400px">
   <form action="" method="post">
   <caption><h2>简单计算器</h2></caption>
    <tr>
    <td><input type="text" size="10" name="num1" value="<?php 
         if(!empty($num1)) echo "$num1"; //提交后仍显示输入的数据，否则
                                        //将重新刷新该页面
   ?> "/>
     </td>
   <td>
   <select name="opter">
    <option value="+" <?php
            if($_POST['opter']=="+") echo " selected";
      ?>>+</option>
    <option value="-" <?php
     if($_POST['opter']=="-") echo "selected";
    ?>>-</option>
    <option value="x" <?php
     if($_POST['opter']=="x") echo "selected";
   ?>>&times;</option>
   <option value="/" <?php
      if($_POST['opter']=="/") echo "selected";
    ?>>&divide;</option>
  <option value="%" <?php
      if($_POST['opter']=="%") echo "selected";
 ?>>%</option>
</select>
</td>
  <td>
   <input type="text" size="20" name="num2" value="<?php
      if(!empty($num2)) echo "$num2";
    ?>
   "/>
</td>
<td><input type="submit" name="sub"  value="计算"/></td>
</tr>
<?php
  if(isset($_POST['sub']) && !empty($_POST['sub'])){
    $sum=0;
  switch($opter){
     case "+": $sum=$num1 + $num2;
          break;
    case "-" : $sum= $num1 - $num2;
        break;
   case "x" : $sum = $num1 * $num2;
       break;
   case "/" : $sum= $num1 / $num2;
      break;
   case "%" : $sum = $num1 % $num2;
    break;
}
  echo "<tr><td colspan='4'align='center'>";
  echo "计算结果：$num1 $opter $num2 = $sum</td></tr>";
}
?>
   </form>
</table>
</body>
</html>
