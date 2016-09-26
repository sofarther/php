<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>table</title>
</head>
<body>
  <?php
/*
   $outer=0;
  $n=0;
   echo "<table align='center' border='1' width='500' >";
   while($outer<10){
      if(($outer%2)==0) $bgcolor="#ffffff";
      else $bgcolor="#dddddd";
     echo "<tr bgcolor=$bgcolor>";
    $in=1;
    while($in<=10){
     echo "<td>$n</td>";
     $in++;
     $n++;
}
 echo "</tr>";
 $outer++;
}
 echo "</table>";
*/
function showMsg(){
  echo "Hello";
}
include("function.php");
 table();
 table("10X10",10,10);
echo "<br/><br/><br/>";
$func_name="two";
$result=$func_name(3,4);
echo "3<sup>2</sup>+4<sup>2</sup>=".$result."<br/>";
more_args("first", "two", "third");
more_args("1", 2, 5, 6.45, true);
  $i=1;
 $j=1;
 for(;$i<=9;$i++){
    for($j=1;$j<=$i;$j++){
     echo "$j &times; $i =".$j *$i."&nbsp;&nbsp;";
}
 echo "<br/>";
}
 showMsg();
 echo showMsg();
?>
</body>
</html>
