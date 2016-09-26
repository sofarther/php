<?php
 require("class_Timer.php");
   echo  date("M-d-Y", mktime(0,0,0,12,36,2007))."<br/>";
   echo date("M-d-Y", mktime(0,0,0,14,23,2008))."<br/>";
   echo date("M-d-Y",mktime(0,0,0,1,1,99));
   $year=1991;
   $month=1;
   $day=10;
   $birthday=mktime(0,0,0,$month,$day,$year);
   $now =time();
   $ageunix =$now -$birthday;
   $age =floor($ageunix/(60*60*24*365));
   echo "age: ".$age."<br/>";
 //idate() 返回int，以整数的形式表示指定的字段的值
 //在时间函数中，时间戳是以1970.1.1为基准的，因此参数表示的是距离1970.1.1的秒数，因此返回的是1994
   echo "age: ". (idate("y",$ageunix)-70);
//在date()格式化字符串中大部分的字母都有特定的含义，若要按原字符输出则需加\转义，
//但\r在字符串中有特定的含义表示回车符，因此需再次转义
   echo date("<b\\r/>M-d-Y H : i :s <br/>",$now);
   echo date("M-d-Y H : i :s <br/>",mktime());
  date_default_timezone_set('PRC');
   echo date('Y-m-d H:i:s');
   echo "<br/>";
 
   echo "<br/>";
   echo date("\a:a;\A:A;\d:d;\D:D;\F:F;\g:g;\G:G;\h:h;\H;H;\i:i;\I:I",mktime());
   echo"<br/>";
  echo date("\j:j;\l:l;\L:L;\m:m;\M:M;\n:n;\O:O;\r:r;\s:s;\S:S;\t:t;\T:T;\U:U;\w:w;\W:W;\Y:Y;\z:z;\Z:Z",mktime());
  echo "<br/>";
  print_r( gettimeofday());
 echo "<br/>";
echo date_sunset(time());
 echo date_sunrise(time());
 echo "<br/>";
 echo microtime();
echo "<br/>";
echo microtime(true);
 echo "<br/>";
 $timer = new Timer();
 $timer->start();
 usleep(1000);
 $timer->stop();
 echo "spend time:<b>".$timer->spent()."</b>s";

//获取时间戳表示的时间的 各个时间字段信息
 //getdate($unix=time())
  $d =getdate(); //默认返回当前时间，可指定Unix时间戳返回指定时间
// [seconds] => 46 [minutes] => 5 [hours] => 9 [mday] => 31 [wday] => 0 [mon] => 7 [year] => 2016 [yday] => 212 [weekday] => Sunday [month] => July [0] => 1469927146 
  // print_r($d);


 //localtime($unix=time(),bool), 当bool为true 时，返回关联数组
 $d1 =localtime(time(),true);
//tm_mon 从0开始， tm_year 从1900 开始
// [tm_sec] => 18 [tm_min] => 15 [tm_hour] => 9 [tm_mday] => 31 [tm_mon] => 6 [tm_year] => 116 [tm_wday] => 0 [tm_yday] => 212 [tm_isdst] => 0 
// print_r($d1);
//获取当天开始的时间 00:00:00
  $t =mktime(0,0,0,$d['mon'],$d['mday'],$d['year']);
	echo date('Y-m-d H:i:s',$t);
  $t=mktime(0,0,0,$d1['tm_mon']+1, $d1['tm_mday'],$d1['tm_year']+1900);
 echo date('Y-m-d H:i:s',$t);
?>
