<html>
  <head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
  </head>
 <body>
  <?php
   require_once "xml.php";
  if(!isset($_REQUEST['id'])){
    exit();
   }

    $xml = new XmlComm("my.xml");
   $arr_stu = $xml->getStuAttr($_REQUEST['id']);
  echo "<form action='stu_control.php' method='post'>";
  echo "<table border='0px' align='center' width='400px' cellspacing='2px'>";
  echo "<caption> 修改信息</caption>";

   foreach($arr_stu as $key =>$value){
   if($key == "id"){
    echo "<tr align='center'><td>ID:</td><td><input type='text' name='id' size='10' value='$value' readonly /></td></tr>";
     continue;
   }
  echo "<tr align='center'><td>$key</td><td><input type='text' name='attrs_extra[$key]' size='10' value='$value'/></td></tr>";
  }
  $stu_info = $xml->getStuInfo($_POST['id']);
  foreach($stu_info as $key=>$value){
  if($key == "name" || $key == "sex" || $key=="age"){
echo "<tr align='center'><td>$key</td><td><input type='text' name='$key' size='10' value='$value'/></td></tr>";
 continue;
  }
 echo "<tr align='center'><td>$key</td><td><input type='text' name='tag_extra[$key]' size='10' value='$value'/></td></tr>";
  }
  echo "<tr align='center'><td><input type='submit' name='update' value='修改'/></td>";
  echo "<td><input type='button' name='cancel' value='取消'/></td></tr>";
 echo "</table></form>";
  ?>
 </body>
</html>
