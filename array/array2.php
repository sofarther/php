<html>
<head>
<meta  http-equiv=content-type content="text/html;charset=utf-8" >
<title>Array2</title>
</head>
<body>
<?php
include("function.php");
//简单排序
 $data=array(23,64,32,73,15,47,61);
 sort($data);
 print_r($data);
echo "&nbsp;&nbsp;&nbsp;&nbsp;";
rsort($data);
print_r($data);
echo "<br/>";
//根据键名排序
$kdata=array(5=>"five", 7=>"seven", 3=>"three", 2=>"two", 6=>"six");
ksort($kdata);
print_r($kdata);
echo "&nbsp;&nbsp;&nbsp;&nbsp;";
krsort($kdata);
print_r($kdata);
echo "<br/>";
//根据键值排序，并保持原来的键名/值对
echo "asort/arsort:<br>";
asort($kdata);
print_r($kdata);
echo "&nbsp;&nbsp;&nbsp;";
arsort($kdata);
print_r($kdata);
echo "<br/>sort/rsort:<br/>";
sort($kdata);
print_r($kdata);
echo "&nbsp;&nbsp;&nbsp;";
rsort($kdata);
print_r($kdata);
echo "<br/>";
//自然排序
$filename=array("file1.txt","file3.txt", "file7.txt","File4.txt","file10.txt" , "File2.txt", "file15.txt", "file20.txt", "File8.txt");
natsort($filename);
print_r($filename);
echo "<br/>";
natcasesort($filename);
print_r($filename);
echo "<br/>";
echo "sort:<br/>";
sort($filename);
print_r($filename);

echo"<br/>";
//用户自定义回调函数排序

$dates=array("10-10-2003","2-17-2002", "2-16-2003", "1-01-2005", "10-10-2004");
usort($dates,"date_sort");
print_r($dates);
echo "<br/>";
//多维数组排序
$erarr=array( array("id"=>1, "soft"=>"Linux","rating"=>3),
             array("id"=>2,"soft" => "Apache", "rating" =>1),
            array("id" => 3, "soft" => "MySQL", "rating" => 4),
           array("id" =>4, "soft" => "PHP", "rating" =>2)
      );
 //分别创建排序的主键名和次键名
 //$key为默认的索引，$value为一维数组
 foreach($erarr as $key => $value){
  $soft[$key]=$value["soft"];
  $rating[$key]=$value["rating"];
}
array_multisort($rating,$soft,$erarr);
print_r($erarr);
echo "<br/>";
//拆分、合并、分解和 结合数组
$cdata=array(5=>"five", 7=>"seven", 3=>"three", 2=>"two", 6=>"six");
print_r(array_slice($cdata,1,2));
echo "<br/>";
print_r(array_slice($cdata,-1,1));
echo "<br/>";
print_r(array_slice($cdata,2,-1,true));
echo "<br/>";
//array_splice($cdata,2,count($cdata),array("zero","one"));//由于第三个参数不能为空，所以要删除2之后所有元素，可使用count函数
array_splice($cdata,1,3,"xxxxx");
print_r($cdata);
echo "<br/>";
$a1=array("OS","WebServer","DataBase","Language");
$a2=array("Linux","Apache","MySQL","PHP");
$b=array_combine($a1,$a2);
print_r($b);
echo "<br/>";
$t=array("OS"=>"ubuntu","Server"=>"Samba");
$merge1=array_merge($b,$t);
print_r($merge1);
print_r($b);//不修改原数组
echo "<br/>";
$merge2=array_merge_recursive($b,$t);
print_r($merge2);
echo "<br/>";
$merge3=array_merge($b);
print_r($merge3);
echo "<br/>";
$tmp=array(3=>"PHP",4=>"MySQL");
$merge4=array_merge($tmp);
print_r($merge4);
echo "<br/>";

$sect = array("System"=>"Linux","OS"=>"ubuntu","Server"=>"Samba","DataBase"=>"MySQL", "Language"=>"PHP");
$intersection1=array_intersect($b,$sect);
print_r($intersection1);
echo "<br/>";
$intersection2=array_intersect_assoc($b,$sect);
print_r($intersection2);
echo "<br/>";
$diff1=array_diff($b,$sect);
print_r($diff1);
echo "<br/>";
$diff2=array_diff_assoc($b,$sect);
print_r($diff2);
echo "<br/>";
//数组实现堆栈和队列
$lamp=array("a" => "Apache", 0=> "test","l" => "Linux");
echo array_push($lamp,"MySQL","PHP");
echo "<br/>";
print_r($lamp);
echo "<br/>";
echo array_pop($lamp);
echo "<br/>";
print_r($lamp);
echo "<br/>";
echo array_shift($lamp);
echo "<br/>";
print_r($lamp);
echo "<br/>";
echo array_unshift($lamp,"Samba");
echo "<br/>";
print_r($lamp);
echo "<br/>";
//其他数组函数
array_push($lamp,"Apache","PHP");
print_r($lamp);
echo "<br/>";
echo array_rand($lamp,1); //随机取出1个键名
echo $lamp[array_rand($lamp,1)]; //随机取出1个元素
$keys = array_rand($lamp,2); //随机取出2个键名，生成一个数组结构
echo $lamp[$keys[0]]."<br/>";
echo $lamp[$keys[1]]."<br/>";
print_r($lamp);
echo "<br/>";
shuffle($lamp);
print_r($lamp);
echo "<br/>";
$nums=array("2"=> "26", "4" => "42", "7" => "79", "3" =>"33" , "6" => "65");
echo array_sum($nums);
echo "<br/>";
$cards=array("jh","js","jd","jc","qh","qs","qd","qc","kh","ks","kd","kc","ah","as","ad","ac","5s","6c"); //18个元素
$hands= array_chunk($cards,4); //将数组分解为二维数组，每个数组的元素个数为4
print_r($hands);

//生成重复元素的数组
$rep_arr = array_fill(-1,4,'a');

//指定键名数组，当该数组的元素有重复的值，则会覆盖该元素生成的键名/值
$rep_arr2 =array_fill_keys($rep_arr,'b');//Array ( [a] => b）
print_r($rep_arr);
print_r($rep_arr2);
?>
</body>
</html>
