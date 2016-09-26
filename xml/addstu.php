<html>
 <head><meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<script type="text/javascript">
  var aAttr=['id'];
var aSubtag =['name','sex','age'];
  function addAttr(){
  var newAttr = prompt("输入要插入的属性名：");
   for(var key in aAttr){
    if(newAttr == aAttr[key]){
    alert("属性 " + newAttr + " 已存在！");
    return;
    }
  }
   var attrTable = document.getElementById('attrs');
  var oTr= attrTable.insertRow(attrTable.rows.length);
   oTr.algin="center";
   var oTd1 = oTr.insertCell(0);
   oTd1.innerHTML=newAttr;
   var oTd2 =oTr.insertCell(1);
   var oAttr = document.createElement("input");
   oAttr.type="text";
   oAttr.name="attrs_extra["+newAttr+"]";
   oAttr.size=10;
   oTd2.appendChild(oAttr);
   aAttr.push(newAttr);
  }
 function addSub(){
  //alert(arguments[0]);
   var newSub= prompt("输入要插入的信息：");
  for(var key in aSubtag){
   if(newSub == aSubtag[key]){
      alert("信息 " + newSub + " 已存在");
     return;
     }
   }
  var subTable = document.getElementById("subtag");
  var oTr = subTable.insertRow(subTable.rows.length);
   oTr.align="center";
  var oTd1 =oTr.insertCell(0);
   oTd1.innerHTML = newSub;
 var oTd2 = oTr.insertCell(1);
  var oSub = document.createElement("input");
    oSub.type="text";
    oSub.name="tag_extra["+newSub+"]";
  oSub.size=10;
  oTd2.appendChild(oSub);
  aSubtag.push(newSub);
  }
</script>
</head>
 <body>

<?php
require_once "xml.php";
 if(isset($_GET['error'])){
  echo "<h3><font color='red'>ID已存在</font></h3>";
 }
 echo "<form action='stu_control.php' method='post'>";
echo "<table id='attrs' width='400px' align='center' border='0px' cellspacing='2px'>";
echo "<caption> 添加学生</caption>";
echo "<tr align='center'><td>属性</td><td><input type='button' value='添加属性' onclick='addAttr()'/></td></tr>";
 echo "<tr align='center'><td>ID:</td><td><input type='text' size='10' name='id' /></td></tr>";
echo "</table>";
echo "<hr/>";
 echo "<table id='subtag' width='400px' align='center' border='0px' cellspacing='2px'>";
//以下代码解析为:<input type="button" value="添加信息" onclick="addSub(&quot;hello&quot;)">
//即属性值是用双引号包住，所以使用\"\",而不能使用\'\'
//由于以下代码在PHP中为字符串，因此函数的参数只能为字符串
 echo "<tr align='center'><td>信息</td><td><input type='button' value='添加信息' onclick='addSub(\"hello\")'/></td></tr>";
echo "<tr align='center'><td>姓名：</td><td><input type='text' size='10' name='name'/></td></tr>";
echo "<tr align='center'><td>性别：</td><td><input type='text' size='10' name='sex'/></td></tr>";
echo "<tr align='center'><td>年龄：</td><td><input type='text' size='10' name='age'/></td></tr>";
echo "</table>";
echo "<br/><center><input type='submit' name='add' value='添加'/> ";
 echo "&nbsp;&nbsp;&nbsp;&nbsp;<input type='button' name='cancel' value='取消'/></center>";
echo "</form>";
?>

</body></html>
