<htmL>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>String Function</title>
</head>
<body>
<?php
$str="This is a test about PHP String Function. There are a lot of function about string by php , defferent from Perl function.";
echo strstr($str , "function");
echo "<br/>";
echo stristr($str, "function");
echo "<br/>";
echo strstr($str,80);
echo "<br/>";
echo strrpos($str,"string");
echo "<br/>";
echo strpos($str,"string");
echo "<br/>";
echo stripos($str,"string");
echo "<br/>";
echo substr($str,5,20);
echo "<br/>";
function getFileName($url){
  $location = strrpos($url,"/")+1;
 $filename = substr($url, $location);
 return $filename;
}
echo getFilename("http://www.sofar.com/php/index.php");
echo "<br/>";
//字符串替换str_replace()函数
echo str_replace("function","函数",$str,$count);
echo "<br/>";
echo '替换的字符串的个数为：' .$count."<br/>";
echo str_ireplace("function","函数",$str,$count);
echo "<br/>";
echo "替换的字符串的个数为：".$count."<br/>";
$search =array("string","function","php");
$replace=array("字符串","函数");
echo str_replace($search,$replace,$str,$count);
echo "<br/>";
echo "替换的总个数：".$count."<br/>";
//字符串的分割和连接
function date_fmt($date){
$listmonth="January,February,March,April,May,June,July,August,September,October,November,December";
$months =explode(",",$listmonth);
$d =explode("-",$date);
if(count($d)==1){ $d =explode("/",$date);}
if(count($d)==1){ echo "请输入正确的日期格式：mm-dd-yyyy 或 mm/dd/yyyy";
                  exit;}
echo implode("&&",$months)."<br/>";
echo join(", ", $d)."<br/>";
$d[0]-=1;
echo $months[$d[0]]."  ".$d[1]." , ".$d[2]."<br/>";
}
date_fmt("04/22/2015");
?>
</body>
</html>
