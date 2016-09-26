<html>
 <head>
 <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
 <script type="text/javascript">
  function showform(name){
   var forms = document.getElementsByTagName("form");
  
  for(var f in forms){
  //alert(forms[f].name);
   if(forms[f].name==name) forms[f].style.display="block";
   else forms[f].style.display="none";
  }
 return false;
 }
</script>
 </head>
<body>
<h3>主界面</h3>
<a href="addstu.php">添加学生</a>
<br/>
 <a href="#" onclick=" return showform('update')">修改信息</a>
<br/>
<form name="update" action="updateStu.php" method="post" style="display:none">
 <?php
  require_once "xml.php";
  $xml = new XmlComm("my.xml");
  $ids = $xml->getStuIds();
  sort($ids);
  echo "选择修改学生的ID： &nbsp;&nbsp;&nbsp;";
  echo "<select name='id'>";
  foreach($ids as $val){
   echo "<option value='$val'>$val</option>";
  }
 echo "</select>";
 echo "<br/>";
  echo "<input type='submit' name='submit' value='确定'/>";
?>
</form>
<a href="#" onclick="showform('delete')">删除学生</a>
<form name="delete" action="stu_control.php" method="post" style="display:none">
 <?php
  
  echo "选择删除学生的ID： &nbsp;&nbsp;&nbsp;";
  echo "<select name='id'>";
  foreach($ids as $val){
   echo "<option value='$val'>$val</option>";
  }
 echo "</select>";
 echo "<br/>";
  echo "<input type='hidden' name='delete' value='delete' />";
  echo "<input type='submit' name='submit' value='确定'/>";
?>
</form>
</body>
</html>
