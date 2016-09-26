<?php
require("function.php");
$res =preg_match("/a(\w\s*)+m/i","lmdlgada_35 2   6  slMlepw",$a);
echo $res;
echo "<br/>";
print_r($a);
preg_match("/(?:Windows).*(Linux).*\\1\s+OS/","My computer has two System:Windows and Linux, now I'm using Linux OS.", $os);
echo "<br/>";
print_r($os);
preg_match("/Web Server/ix" ,"Lamp: webserver->Apache OS->Linux Database->MySQL Language->PHP",$web);
echo "<br/>";
print_r($web);
preg_match("/a.*e/Uis", "abc1defgabcdefgab2cdefgabcd3efg",$u);
preg_match("/a.*e/is", "abc1defgabcdefgab2cdefgabcd3efg",$nu);
echo "<br/>";
print_r($u);
echo "<br/>";
print_r($nu);
echo "<br/";
//preg_match_all()函数
$str="网址为http://www.sofar.com/php/perl.php,
      网址为http://www.mysite.com/index.php,
      网址为http://www.google.com.hk.";
$pattern ="/(https?|ftps?):\/\/(www|bbs)\.([^\.\/]+)\.(com|net|org)(\/[\w-\.\/\?\%\&\=]*)?/i";
$i=1;
if(preg_match_all($pattern,$str,$matches,PREG_SET_ORDER)){
   foreach($matches as $urls){
      echo "搜索到的第".$i."URL为：".$urls[0]."<br/>";
     echo "搜索到的第".$i."URL的协议为：".$urls[1]."<br/>";
     echo "搜索到的第".$i."URL的主机为：".$urls[2]."<br/>";
     echo "搜索到的第".$i."URL的域名为：".$urls[3]."<br/>";
     echo "搜索到的第".$i."URL的顶域为：".$urls[4]."<br/>";
     echo "搜索到的第".$i."URL的文件为：".$urls[5]."<br/>";
     $i++;
}
} else { echo "搜索失败"; }
$j=0;
if(preg_match_all($pattern,$str,$match)){
  foreach($match as $url){
/*
  switch ($j%6) {
   case 0 : echo "第".intval($j/6+1)."个URL为：".$url."<br/>";
              break;
   case 1 : echo "第".intval($j/6+1)."个URL协议为：".$url."<br/>";
                 break;
   case 2 : echo "第".intval($j/6+1)."个URL主机为：".$url."<br/>";
                 break;
   case 3 : echo "第".intval($j/6+1)."个URL域名为：".$url."<br/>";
                 break;
   case 4 : echo "第".intval($j/6+1)."个URL顶域为：".$url."<br/>";
                 break;
   case 5 : echo "第".intval($j/6+1)."个URL文件为：".$url."<br/>";
                 break;

}
$j++;
*/
 print_r($url);
 echo "<br/>";
}
} else { echo "搜索失败！";}
$arr = array("Ubuntu14.04" ,"Apache2.4.7","MySQL5.5.41-0ubuntu0.14.04.1","PHP5.5.9-1ubuntu4.8");
$patt ="/^[a-zA-Z]+(\.|\d)+$/";
$version= preg_grep($patt,$arr);
print_r($version);
echo "<br/>";
//preg_raplace()函数
$today="today is 2015-04-20 MONDAY";
echo preg_replace("/(\d{4})-(\d{2})-(\d{2})/","\\2/\\3/\\1",$today)."<br/>";
echo preg_replace("/(\d{4})-(\d{2})-(\d{2})/","\${2}/\${3}/\${1}",$today)."<br/>";
echo '<span  bgcolor="black" title="title">'.$today."</span>";
echo "<br/>";
$patt1 ="/(<\/?)(\w+)([^>]*>)/e";
 $text ="这个文本中有<b>粗体</b>,<u>下划线</u>,<i>斜体</i>,<font color='red' size='10'>字体</font>标记";
$rep="'\\1'.strtoupper('\\2').'\\3'";
echo preg_replace($patt1,$rep,$text);
//UBB转换为Html
$text1="将本行文本[b]加粗[/b]
       将本行文本[i]改为斜体[/i]
      将本行文本加上[u]下划线[/u]
     本行文字大小为[size=7][color=red]7号字 红色字体[/color][/size]
  [align=center]将本行居中[/align]
 链接到[url=http://www.sofar.com/]sofar[/url]
给[email=sofar@gmail.com]sofar[/email]发信
在此处插入图片[img]http://www.sofar.com/html/hand.jpg[/img]
[b][i][u][align=center]本行为加粗、斜体并带下划线，且居中的文字[/align][/u][/i][/b]";
echo UBBCode2Html($text1);
//字符串分割preg_split()函数
$lamp ="LAMP : Linux Apache MySQL PHP";
$words = preg_split("/[\s:]+/",$lamp);
print_r($words);
echo "<br/>";
//将字符串分割成字符
$char =preg_split("//",$lamp,10,PREG_SPLIT_NO_EMPTY);
print_r($char);
echo "<br/>";
//将字符串分割为匹配项和其偏离量
$offsets = preg_split("/[\s:]+/",$lamp,-1,PREG_SPLIT_OFFSET_CAPTURE);
print_r($offsets);
echo "<br/>";
$p =preg_split("/([:])/",$lamp,-1,PREG_SPLIT_DELIM_CAPTURE);
print_r($p);
?>
