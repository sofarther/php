<html>
 <head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
 </head>
 <body>
  <?php
    $i=0;
  while(++$i){
    switch($i){
     case 5: echo "quit at 5<br/>";
         break;
    case 10: echo "quit at 10<br/>";
         break 2; //表示跳出2层循环，默认只跳出一层，即switch语句
                 //break 后的数字不能超过实际的层数，否则会报错
                //continue与之相同
     default :
    break;
    }
  }
  echo "\$i=" .$i; //10
  ?>
 </body>
</html>
