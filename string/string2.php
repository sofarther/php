<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title> String 比较和正则表达式</title>
</head>
<body>
<?php
 $username ="sofar";
$passwd ="Sofarther";
if(strcasecmp($username,"sofar")==0) echo "用户存在<br/>";
if(strcmp(strtolower($username),"sofar")==0) echo "用户名存在<br/>";
switch(strcmp($passwd,"soFarther")){
 case 0 : echo "两个字符串相等.<br/>";
          break;
 case 1 : echo "第一个字符串大于第二个字符串<br/>";
       break;
case -1 : echo "第一个字符串小于第二个字符串<br/>";
   break;
default: echo strcmp($passwd,"soFarther")."<br/>"; break;
}
$files =array("file1.txt" ,"File21.txt","file3.txt","file2.txt","file13.txt", "File18.txt","file25.txt","File8.txt");
function mySort($arr,$flags=0){
   for($i=0;$i<count($arr);$i++){
     for($j=0;$j<count($arr)-1;$j++){
         if($flags==0){
            if(strcmp($arr[$j],$arr[$j+1])>0){
               $tmp = $arr[$j];
              $arr[$j]=$arr[$j+1];
             $arr[$j+1]=$tmp;
}
}   
         elseif($flags==1){
            if(strcasecmp($arr[$j],$arr[$j+1])>0){
               $tmp = $arr[$j];
              $arr[$j]=$arr[$j+1];
             $arr[$j+1]=$tmp;
}
}   
         elseif($flags==2){
            if(strnatcmp($arr[$j],$arr[$j+1])>0){
               $tmp = $arr[$j];
              $arr[$j]=$arr[$j+1];
             $arr[$j+1]=$tmp;
}
}   
   elseif($flags==3){
       if(strnatcmp(strtolower($arr[$j]),strtolower($arr[$j+1]))>0){
         $tmp=$arr[$j];
        $arr[$j]=$arr[$j+1];
       $arr[$j+1]=$tmp;
   
}

}
}
}
return $arr;
}
 print_r(mySort($files));
echo "<br/>";
 print_r(mySort($files,1));
echo "<br/>";
print_r(mySort($files,2));
echo "<br/>";
print_r(mySort($files,3));
?>
</body>
</html>
