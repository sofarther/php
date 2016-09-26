<?php
//可变长度参数列表
  function more_args(){
  $args=func_get_args();
 for($i=0;$i<count($args); $i++)
    echo "第".$i."参数是 ".$args[$i]."<br/>";
}
//变量函数，将函数名作为值赋值给一个变量，然后使用该变量引用函数
//例$var="two"; $result=$var(4.6);
function one($a,$b){
 return $a+$b;
}
function two($a,$b){
  return $a*$a+$b*$b;
}
function three($a,$b){
  return $a*$a*$a + $b*$b*$b;
}
function table($table_name="table",$rows=5,$cols=4){
   echo "<table border=1 align='center' width='400px'>";
   echo "<caption><h2>".$table_name."</h2></caption>";
     
   for($r=0;$r<$rows;$r++){
  if(($r%2)==0)
    $bg_color="#ffffff";
  else $bg_color="#dddddd";
  echo "<tr bgcolor=".$bg_color.">";
   $c=0;
 for($c=0; $c<$cols; $c++){
   echo "<td>".($c+$r*$cols)."</td>";
}
 echo "</tr>";
}
echo "</table>";
} 
function amortizationTable($pNum,$periodPay,$balance,$monthlyInterest){
  //pNum为还款编号，periodPay为每月要还的总额，balance为剩余的还款总额
 // monthlyInterest为每月的利率
$payInterest=round($balance*$monthlyInterest,2); //每月的利息
$payPrincipal = round($periodPay - $payInterest,2); //每月还完利息后剩余的还款
$newBalance=round($balance - $payPrincipal,2);//该月结算后的还款总额
if($newBalance <$payPrincipal){
 $newBalance=0;
}
printf("<tr><td>%d</td>",$pNum);
printf("<td>%s</td>", number_format($newBalance,2));
printf("<td>%s</td>",number_format($periodPay,2));
printf("<td>%s</td>", number_format($payPrincipal,2));
printf("<td>%s</td>", number_format($payInterest,2));
if($newBalance>0){
  $pNum++;
 amortizationTable($pNum,$periodPay,$newBalance,$monthlyInterest);
}
else{
  return 0;
}
}
function calPeriodPay($balance,$yearlyInterest,$termLength){
   //termLength为贷款期限，以年计
   //yearlyInterest为贷款的年利率
  $termMonth=$termLength * 12; //贷款期限，以月计
 $intCalc=1+$yearlyInterest/12; //每月的总利率
$periodPay= $balance * pow($intCalc,$termMonth)*($intCalc-1)/(pow($intCalc,$termMonth) -1);
 return round($periodPay,2);
}
//数组的回调函数
function score_func($val){ //用于回调函数array_filter
  if($val>85) return true;
}
//用于回调函数array_walk
//php闭包的实现
function avg_func2($data){
//访问外部函数的变量，通过匿名函数的定义实现，可使用use()传入外部函数的变量，返回一个引用函数的变量
 $avg_func = function ($val,$key) use($data){
  $num=count($val);
 $total=0;
 foreach($val as $k=> $sc)
    $total+= $sc;

 $avg = $total / $num;
echo " name: $key &nbsp; &nbsp; avg: $avg <br/>";
echo "$data<br/>";
};
 return $avg_func;
 }
//用于回调函数array_map
function arr_in_arr($val1, $val2){
 for($i=0; $i<count($val2); $i++){ 
 if($val1==$val2[$i])
   return "same";
}
return "different";
}
//usort的自定义回调函数
//$a 表示数组中位置在前的元素值，$b表示数组中位置在后的元素值
//数组中日期的字符串形式：'m-d-y'
function date_sort($a,$b){
 if($a==$b) return 0;
 list($amonth,$aday,$ayear)=explode('-', $a);
 list($bmonth,$bday,$byear)=explode('-',$b);
 $amonth=str_pad($amonth,2,"0",STR_PAD_LEFT); //对于不足两位的月份补零
 $bmonth=str_pad($bmonth,2,"0",STR_PAD_LEFT);
 $aday=str_pad($aday,2,"0",STR_PAD_LEFT);
 $bday=str_pad($bday,2,"0",STR_PAD_LEFT);
 $a=$ayear.$amonth.$aday;
 $b=$byear.$bmonth.$bday;
 return ($a>$b)? 1:-1; //当前者大于后者时，返回正数，否则返回负数；这样的话，数组将按照从小到大的顺序排列
}
//将UBB代码转换为Html代码
function UBBCode2Html($text){
  $patterns = array('/(\r\n)|(\n)/','/\[b\]/i',
 '/\[\/b\]/i',
'/\[i\]/i',
'/\[\/i\]/i',
'/\[u\]/i',
'/\[\/u\]/i',
   '/\[font=([^\[\<]*)\]/i',
   '/\[color=([#\w]+?)\]/i',
   '/\[size=(\d+?)\]/i',
    '/\[align=(left|center|right)\]/i',
  '/\[size=(\d+(\.\d+)?(px|pt|in|cm|em|ex|%)+?)\]/i',
  '/\[url=(https?|ftps?|gopher|news|telnet){1}:\/\/([^\["\']+?)\](.*)\[\/url\]/is',
 '/\[url=www.([^\["\']*)\](.+?)\[\/url\]/is',
 '/\[email\]\s*([a-z0-9\-_.]+)@([a-z0-9\-_.]+[.][a-z0-9\-_.]+)\s*\[\/email\]/i',
 '/\[email=([a-z0-9\-_.+]+)@([a-z0-9\-_+]+[.][a-z0-9\-_]+)\](.*)\[\/email\]/is',
 '/\[img\](.+?)\[\/img\]/',
 '/\[\/color\]/i','/\[\/size\]/i','/\[\/font\]/','/\[\/align\]/'
);
 $replace=array('<hr>','<b>','</b>','<i>','</i>','<u>','</u>',
  '<font face="\\1">',
  '<font color="\\1">',
  '<font size="\\1">',
  '<p align="\\1">',
  '<font style=\"font-size:\\1\">',
  '<a href="\\1://\\2" target="_blank">\\3</a>',
  '<a href="www.\\1" target="_blank">\\2</a>',
  '<a href="mailto:\\1@\\2">\\1@\\2</a>',
  '<a href="mailto:\\1@\\2">\\3</a>',
 '<img src="\\1">',
 '</font>','</font>','</font>','</p>'
);
return preg_replace($patterns,$replace,$text);
}
?>
