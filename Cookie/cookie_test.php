<?php
  if($_COOKIE['islogin']){
    echo "你好：".$_COOKIE['username'].'&nbsp;&nbsp;&nbsp;';
   echo '<a href="cookie_login.php?action=logout">退出</a>';
} else {
  header("Location: cookie_login.php");
}
?>
<html>
 <head>
 <meta http-equiv="Content-type" content="text/html;charset=utf-8">
<title>网站首页面</title>
</head>
<body>
  <p>访问Cookie</p>
</body>
</html>

