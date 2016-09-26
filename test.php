<?php
  $fields='`uname`|`sender`';
   $f='`uname`';
  $re='/(^|\|)'.$f.'($|\|)/i';
   $arr=array();
   if(preg_match($re,$fields,$arr)){
    var_dump($arr);
   }else{
    echo 'no match';
   }
   //strops(),当查找的字串位于原字符串开头，则返回0
  $str1='yabadabadoo';
 $str2='yaba';
   //返回0,在条件语句中表示false
  if(strpos($str1,$str2)){
     echo "\"".$str1."\" contains \"".$str2."\"";
  }else{
  echo "\"$str1  does not contain \"$str2\"";
  }
echo "<br/>";
  //
  $x=6;
  //6+7=13
echo $x+++$x++;
 echo "<br/>";
 // 13-12=1
 echo $x---$x--;
 echo "<br/> $x";
echo "<br/>";
  //地址引用的变量，在=右边使用时不会解析为变量值
  $a='1';
  $b=&$b;
  //输出空字符
  echo "\$b=$b <br/>";
  $b="2$b";
  // $a=1; $b=2
  echo "\$a=$a; \$b=$b<br/>";
  //array_merge() 当参数有不为数组参数时，将返回NULL
  $arr=array();
  $arr['val1']=array(1,4);
  $arr['val2']=7;
  $arr['val3']=array(3,6);
  $new_arr=array();
//  $new_arr=array_merge($new_arr,$arr['val1']);
  //不会修改$new_arr,返回的是新数组
array_merge($new_arr,$arr['val1']);


  var_dump($new_arr); 
  //可以使用$new_arr=array_merge($new_arr,(array)$arr['val2']);
 $new_arr=array_merge($new_arr,$arr['val2']);
  var_dump($new_arr); //NULL
 $new_arr=array_merge($new_arr,$arr['val3']);
  var_dump($new_arr); //NULL
   //在对字符串进行数学计算时，php会将字符串的数字进行转化，直到遇到非数字
   //"$25" 转换为0; “15%” 转换为15
  $y=3+"15%"+"$25";
  echo "\$y=$y<br/>";
  //字符串可以使用[] 或{}来获取和赋值字符串的指定位置上的字符，若为不连续，
  //则中间的字符为' ',且strlen()会以最大索引值为参照
  $text="Hello ";
   //将"world"截取第一个字符来赋值w
  $text[9]="world";
  echo "\$text=$text<br/>"; //Hello w
  echo "strlen=".strlen($text); //10

  $arr=array(  
         array('name'=>'sofar', 'sex'=>'male','age'=>32),
         array('name'=>'sofarther','sex'=>'female', 'age'=>23)

      );
   //对于二维数组，将一维数组的生成JSON格式字符串，并生成字符串的数组，该数组形式可以在客户端直接转换为
    //对象
  //[{"name":"sofar","sex":"male","age":32},{"name":"sofarther","sex":"female","age":23}]
   echo json_encode($arr);
   $arr=array(array('name'=>'sofar','time'=>'2016-02-04'),
				array('name'=>'zhss','time'=>'2016-02-05'),
				array('name'=>'zss','time'=>'2016-03-04'),
				array('name'=>'sofarther','time'=>'2016-04-23'),
				array('name'=>'aaa','time'=>'2016-03-24'),
				array('name'=>'bbb','time'=>'2016-02-21'),
				array('name'=>'ccc','time'=>'2016-04-21'),
				array('name'=>'ddd','time'=>'2016-05-23'),
				array('name'=>'eee','time'=>'2016-03-21')
				);
				$res=array();
				$i=0;
	foreach($arr as $key=>$val){
				$mon=substr($val['time'],0,7);
				$day=substr($val['time'],8);
				if(!isset($res[$i])){
					$res[$i]['mon']=$mon;
					 
						
					}else if($res[$i]['mon'] !=$mon){
						  $i++;
						  $res[$i]['mon']=$mon;
						 }
				if(!isset($res[$i][$day])){
					$res[$i][$day]=array();
				}
				$res[$i][$day][]=$val['name'];

  }
  echo '<br/>';
    var_dump($res);
echo '<br/>';
//parse_str()将查询字符串解析为变量
 $str='name=sofar&sex=male&age=22';
  parse_str($str);
  echo $name;
  echo $sex;
  echo $age;
 //可以传入一个数组参数，用于保存解析后的结果
 parse_str($str,$a);
var_dump($a);
print_r($a);

$url = 'http://username:password@hostname/path?arg=value#anchor';
/*
Array ( [scheme] => http [host] => hostname [user] => username [pass] => password [path] => /path [query] => arg=value [fragment] => anchor ) 

*/
print_r(parse_url($url));
echo parse_url($url, PHP_URL_PATH); // /path

$url ='http://www.php100.com/html/php/hanshu/2013/0905/4515.html';
/*
Array ( [scheme] => http [host] => www.php100.com [path] => /html/php/hanshu/2013/0905/4515.html ) 

*/
print_r(parse_url($url));
echo parse_url($url, PHP_URL_PATH); // /html/php/hanshu/2013/0905/4515.html


 class Person{
  private $name;
 private $sex;
 private $age;
 public $nickname;
 public $phone;
 public function  __construct($nickname,$phone){
 $this->nickname=$nickname;
 $this->phone=$phone;
 }
  function __toString(){
 return "Name: ".$this->name.", Sex: ".$this->sex.",Age: ".$this->age."<br/>";
}
}

 $p = new Person('sofar','144556344');
echo get_class($p);
echo '<br/>';
$arr_p =get_object_vars($p);
print_r($arr_p);
$arr =array('name'=>'zhss','sex'=>'female','age'=>35);
extract($arr);
$arr =array('name'=>'zss','sex'=>'male','age'=>25);
extract($arr,EXTR_PREFIX_SAME,'pre');
echo 'nikeName:'. $name.'sex:'.$sex.' age:'.$age.'<br/>';
echo 'name:'.$pre_name;
$str ='add<a href="localhost" >aaaaa</a><img src="img.png"/><p class="lll"><img src="mm.gif"/></p>';
	//负向前瞻(?!); 正向前瞻(?=)
	$re='/<(?=img)[^>]*>/i'; //将<img/>标签实体化
	function trans($match){ return htmlspecialchars($match[0]);}
	echo preg_replace_callback($re,trans,$str);
foreach($arr as $key=>$val){
	echo $key.'=>'.$val;
}
 //foreach()语句结束后，其语句中的遍历的变量仍可以被外部访问	
 echo $val; //最后遍历元素的值

 $t;
//isset($t) false;
// is_null($t) true
// empty($) true
 if(isset($t)){
	echo '$t is set';

}
 if(is_null($t)){
	echo '$t is null';
 }
 if(empty($t)){
	echo '$t is empty';
 }
$t=null;
/*
 isset($t) false
is_null($t) true
empty($t) true

*/
/*
echo '$t=null';
if(isset($t)){
	echo '$t is set';

}
 if(is_null($t)){
	echo '$t is null';
 }
 if(empty($t)){
	echo '$t is empty';
 }
*/
$t=false;
/*
$t=0,"", "0",false
 isset($t) true
is_null($t) fasle
empty($t) true

*/
echo '$t=0';
if(isset($t)){
	echo '$t is set';

}
 if(is_null($t)){
	echo '$t is null';
 }
 if(empty($t)){
	echo '$t is empty';
 }
//$t=array();
/*
 isset($t) true
is_null($t) fasle
empty($t) true

*/
/*
echo '$t=array';
if(isset($t)){
	echo '$t is set';

}
 if(is_null($t)){
	echo '$t is null';
 }
 if(empty($t)){
	echo '$t is empty';
 }
*/
if(file_exists('./newfolder/*.*')){
	unlink('./newfolder/*.*');
	echo 'file exists';
}else{
	echo 'file not exists';
}
 
 echo 'begin='.microtime(true);
//sleep(1);
echo 'end='.microtime(true);
echo date('Y-m-d',1474013381);
$a = include_once 'include_test.php';
$b=include 'include_test.php';
$c= require_once 'include_test.php';
$d=require 'include_test.php';
$e=require_once 'include_test.php';
$f = include_once 'include_test.php';
var_dump($a); //array(2) { ["abc"]=> string(3) "ABC" [123]=> string(3) "890" }
var_dump($b);//array(2) { ["abc"]=> string(3) "ABC" [123]=> string(3) "890" }
var_dump($c);//bool(true)
var_dump($d);//array(2) { ["abc"]=> string(3) "ABC" [123]=> string(3) "890" }
var_dump($e);//bool(true)
var_dump($f);//bool(true)
?>
