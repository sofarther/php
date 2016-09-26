<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>String Function</title>
</head>
<body>
<?php
/*
 $str = "lamp";
 echo $str."<br/>";
 echo $str[0]."<br/>";
 echo $str[1]."<br/>";
 echo $str[2]."<br/>";
 echo $str[3]."<br/>";
$url= "http://www.google.cpm.hk" ;
fopen($url,"r") or die("Unable to connect to $url");
 echo $str{0}."<br/>";
 echo $str{1}."<br/>";
 echo $str{2}."<br/>";
 echo $str{3}."<br/>";
 echo substr("1234567",2,4);
 echo substr(1234567,2,4);
*/
//trim/ltrim/rtrim()函数
$str1 = "   lamp   ";
echo "[$str1]<br/>";
echo strlen($str1)."<br/>";
echo strlen(ltrim($str1))."<br/>";
echo strlen(rtrim($str1))."<br/>";
echo strlen(trim($str1))."<br/>";
$str2="123 This is a test ...";
echo "[$str2]<br/>";
echo trim($str2, "0..9 A..Z . ");
echo ltrim($str2,"0..9")."<br/>";
echo rtrim($str2,".")."<br/>";

//str_pad()函数
$str3="LAMP";
echo str_pad($str3,9)."<br/>";//默认向右填充空格
echo str_pad($str3,9,"_",STR_PAD_LEFT)."<br/>";
echo str_pad($str3,9,"_",STR_PAD_BOTH)."<br/>";//向右填充三个“_”,向左填充两个“_”
echo str_pad($str3,6,"___")."<br/>";

//strtoupper()/strtolower()/ucfirst()/ucwords()函数
$lamp = "lamp is of composed of linux Apache MySQL and php";
echo strtolower($lamp)."<br/>";
echo strtoupper($lamp)."<br/>";
echo ucfirst($lamp)."<br/>";
echo ucwords($lamp)."<br/>";
echo ucfirst(strtolower($lamp))."<br/>"; //字符串首字母大写，其余都小写
echo $lamp;
echo "<br/>";
//和HTML标签相关的字符串格式化
//nl2br()
echo nl2br("One line \n Another line.\n");
//htmlpspecialchars()函数
$str4= "\"<b>WebServer\".</b> & 'Linux'    &   'Apache' 一个";
//输出形式一样，但生成的源html文件不同
echo $str4."<br/>";
echo htmlspecialchars($str4,ENT_COMPAT);
echo "<br/>\n";
echo htmlspecialchars($str4,ENT_QUOTES);
echo "<br/>\n";
echo htmlspecialchars($str4,ENT_NOQUOTES);
echo "<br/>\n";
echo $str4;
echo "<br/>";
$str5 = "<font color='red' size= '7'> Linux</font><i>Apache</i><u>MySQL</u><b>PHP</b>";
echo strip_tags($str5)."<br/>\n";
echo strip_tags($str5,"<font>")."<br/>\n";
echo strip_tags($str5,"<u><b><i>")."<br/>\n";
echo $str5;
echo "<br/>";
$str6 ="一个 'quote' 是 <b>bold</b>";
echo htmlentities($str6)."<br/>\n";
echo $str6;
echo "<br/>";
$str7 = "abcdefg";
echo strrev($str7)."<br/>";
echo $str7;
echo "<br/>";
$num = 123456789;
echo number_format($num)."<br/>";
echo number_format($num,3)."<br/>";
echo number_format($num,2,",",".");
$passwd = "sofar";
echo md5($passwd)."<br/>";
if(md5($passwd)=="e436de9b434773a64cfdfb50fba464fe"){
  echo "密码正确，登录成功！";
}
echo $passwd;
echo "<br/>";
?>
<form action="string.php" method="post">
 输入字符串：
<input type="text" size="30" name="str" value="<?php echo html2Text($_POST["str"])?>">
<input type="submit" name="submit" value="提交"><br/>
</form>
<?php
  if(isset($_POST["submit"])){
   file_put_contents("string.txt",$_POST["str"]);
   file_put_contents("string1.txt", addslashes($_POST["str"])); 
 echo "原型输出 \":" .$_POST['str']."<br/>";  
 echo "原型转化输出： ". htmlspecialchars($_POST['str'])."<br/>"; 
 echo "添加反斜杠输出： ".addslashes($_POST["str"])."<br/>";
   
   echo "实体转换后输出： ".htmlspecialchars(addslashes($_POST["str"]))."<br/>";
  echo "删除反斜线后输出： ".stripslashes(addslashes($_POST["str"]))."<br/>";
 echo "删除反斜线后实体转换后输出： ".html2Text(addslashes($_POST["str"]))."<br/>";
}
function html2Text($str){
 return htmlspecialchars(stripslashes($str));
}
?>
</body>
</html>
