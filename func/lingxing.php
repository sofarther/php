<html>
<head>
 <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<body>
  <?php
/*
  function showling(){
   echo "函数名不区分大小写";
  }
*/
    function showLing( $rows){
   for($r =1; $r<=$rows; $r++){
     showLine($r,$rows);
     
   }
  for($r = $rows-1; $r>=1; $r--){
    showLine($r,$rows);
   }
  }
  function showLine($ir, $rc){
     //每行先打印空格
     for($i=1; $i<=$rc-$ir; $i++){
      echo "&nbsp;";
     } 
     for($j=1; $j<=$ir*2-1; $j++){
      //判断打印*的位置，其他位置打印空格
      if($j==1 || $j ==$ir*2-1){
      echo"*";
    } else{
      echo "&nbsp;";
     }
   }
    echo "<br/>";
   }
  
   showLing(3);
  ?>
</body>
</html>
