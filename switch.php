<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>Weekday Test</title>
</head>
<body>
 <?php
  $weekday=date("D");
 switch($weekday){
   case "Mon": echo "星期一";
         break;
   case "Tue": echo "星期二";
        break;
  case "Wed": echo "星期三";
       break;
  case "Thu" : echo "星期四";
     break;
  case "Fri" : echo "星期五";
    break;
  case "Sat" : echo "星期六";
    break;
   case "Sun" : echo "星期日";
    break;
}
?>
</body>
</html>
