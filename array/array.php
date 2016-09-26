<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>Array</title>
</head>
<body>
<?php
include("function.php");
//创建数组
$score=array("math" => 89, "english" => 81, "history" => 78, "computer" => 92,
              "physic" => 68); //关联数组
$course=array("english","math", "physic" ,"computer","history"); //索引数组
//使用range创建数组
$letter= range("A","F");
//数组的索引
 $arr = array(3=>"a", "dd",2=>"b");
  print_r($arr); //Array ( [3] => a [4] => dd [2] => b )
 echo count($arr); //3
//创建二维数组
$students= array(
 "sofar" => array($course[1] => $letter[1],$course[0] =>$letter[2], $course[3] => $letter[0], $course[2] => $letter[0], $course[4] => $letter[3]),  
 "zhss" => array($course[1] => $letter[2],$course[0] =>$letter[1], $course[3] => $letter[4], $course[2] => $letter[2], $course[4] => $letter[3]),  
 "sofarther" => array($course[1] => $letter[2],$course[0] =>$letter[3], $course[3] => $letter[1], $course[2] => $letter[2], $course[4] => $letter[3]),  
 "zss" => array($course[1] => $letter[2],$course[0] =>$letter[1], $course[3] => $letter[2], $course[2] => $letter[1], $course[4] => $letter[2]),  
 "sofar" => array($course[1] => $letter[3],$course[0] =>$letter[4], $course[3] => $letter[3], $course[2] => $letter[2], $course[4] => $letter[4])); 
//遍历数组
//foreach语句
echo "<table border='1' align='center' width='400px' cellspacing='0px' cellspadding='0px' >";
 echo "<tr bgcolor='#dddddd' ><th>name</th>";
 foreach($course as $icourse)
 echo "<th>$icourse</th>";
echo "</tr>";
foreach($students as $name => $grade){
  echo "<tr><td>$name</td>";
 foreach($grade as $cs => $level){
   echo "<td>$level</td>";
}
echo "</tr>";
}
echo "</table>";

//each函数
//第一个键名/值对
$mt=each($score);
print_r($mt);
echo "<br/>";
//第二个键名/值对
$en=each($score);
print_r($en);
echo "<br/>";
//第三个键名/值对
$his=each($score);
print_r($his);
echo "<br/>";
//第四个键名/值对
$com=each($score);
print_r($com);
echo "<br/>";
$phy=each($score);
print_r($phy);
echo "<br/>";
$no =each($score);
var_dump($no);
echo "<br/>";
reset($score); //当前each已将数组内部指针指向了数组末端，需调用reset函数将数组指               针重新定位到第一个数组
//while list each 遍历数组
echo "<dl>一个学生的成绩：";
 while(list($key,$value)=each($score)){
  echo "<dd>$key:$value</dd>";
}
 echo "</dl>";
//使用数组内部指针遍历数组
reset($score);
//key 读取当前指针所指向的内容的索引值  current读取当前指针所指向的内容
echo '第一个元素：'.key($score).' => '.current($score)."<br/>";
next($score);
next($score);
echo "第三个元素： ".key($score).'=>' .current($score)."<br/>";
end($score);
echo "最后的元素：".key($score). "=>". current($score)."<br/>";
prev($score);
echo "倒数第二个元素：" .key($score). "=>".current($score)."<br/>";
reset($score);
echo "又回到第一个元素：".key($score). "=>".current($score)."<br/>";
//数组的键值操作函数
echo "数组score元素：<br/>";
print_r($score);
echo "<br/>";
echo "调用array_values()函数后：<br/>";
print_r(array_values($score));
echo "<br/>";
echo "数组score的全键名：<br/>";
print_r(array_keys($score));
echo "<br/>搜索指定元素值78的对应的键名数组：<br/>";
print_r(array_keys($score,'78')); //显示Array([0]=>history)
print_r(array_keys($score,'78',true));//显示Array(),严格上的相等，包括类型
echo "<br/>";
$lamp = array("OS"=>"Ubuntu","WebServer"=>"Apache","Database"=>"MySQL","Language"=>"PHP");
if(in_array("apache",$lamp,true)) echo "apache is macth Apache in array <br/>";
  else echo "the key of 'Apache' is  " .array_search("Apache",$lamp,true)."<br/>";
//in_array和array_search函数区分大小写
if(in_array("Apache",$lamp)) echo "the key of 'Apache'is " .array_search("Apache",$lamp)."<br/>";
//if(in_array(array("Database","MySQL"),$lamp)) echo "['Database','MySQL'] is found<br/>"; //查询数组中是否存在指定的数组时，并不能查询键值/对是否存在
$search_array = array("first"=>null,"second"=>"two","third"=>"three");
echo "isset(\$search_array['first'])返回：".isset($search_array["first"])."<br/>";
echo "array_key_exists('first', \$search_array)返回：".array_key_exists("first",$search_array)."<br/>";
 print_r(array_flip($lamp));
echo "<br/>";
$trans=array("a"=>1,"b"=>2,"c"=>3,"d"=>2);
print_r(array_flip($trans)); //当数组中的元素相同，则会发生冲突，后者将覆盖前者
echo "<br/>";
print_r($trans);
echo "<br/>";
echo "array_search(2,\$trans)返回：".array_search(2,$trans);//array_flip返回新数组
print_r(array_flip($search_array));//array_flip只能翻转字符串和整数类型，其他类型则报错
echo "<br/>";
print_r(array_reverse($lamp));
echo "<br/>";
print_r(array_reverse($lamp,false));
echo "<br/>";
print_r($lamp); //array_reverse返回新数组
echo "<br/>";
//统计数组的元素个数和唯一性
$web=array('lamp'=>array("Linux","Apache","MySQL","PHP"),
           'j2ee'=>array("Unix","Tomcat","Oracle","JSP")
        );
echo "多维数组的元素个数：count(\$web,1): ".count($web,1);//检测多维数组：10
echo "<br/>";
echo "不检测多维数组：count(\$web): " .count($web);//不检测多维数组：2
echo "<br/>";
$ele_count=array_count_values($trans); //统计每个元素出现的次数
echo "<br/>";
print_r($ele_count);
echo "<br/>";
print_r(array_unique($trans)); //删除元素值相同的元素
echo "<br/>";
print_r(array_filter($score,"score_func"));
 //多余的参数在回调时会报错，可以使用@抑制
@array_walk($students,avg_func2("hello")); //没有返回值，将数组中的每个元素的键名和键值传入的指定的函数中，并调用该函数
print_r(array_map("arr_in_arr",$lamp,$web));
print_r(array_map(null,$trans,$ele_count));
?>
</body>
</html>
