<?php
  session_start();
if(isset($_GET['action'])){
if($_GET['action']=="login"){
  if(isset($_POST['username']) && isset($_POST['passwd'])){
 require("mail_connect.php");    
$username = $_POST['username'];
   $passwd = $_POST['passwd'];
  $query ="select * from users where uname=? and passwd=? ";

 $stmt = $mysqli->prepare($query);
 $stmt->bind_param("ss",$username,md5($passwd));
 $stmt->execute();
 $stmt->store_result();
 if($stmt->num_rows ==1){
  $stmt->bind_result($uid,$um,$p);
   $stmt->fetch();
  $_SESSION['uid']=$uid;
  $_SESSION['uname']=$um;
$stmt->close();
$mysqli->close();
 header("Location:mail_index.php");
}
 else {
    echo "用户名或密码错误！";
}
}
} else if($_GET['action']=="logout"){
    header("Location:mail_logout.php");
}
}
?>
<html>
 <head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" >
<title>登录邮箱</title>
</head>
<body>
 <table align="center" width="400px" border="0px" cellspacing="0px" cellpadding="5px">
  <caption><h3>登录邮箱</h3></caption>
<form action="mail_login.php?action=login" method="post">
<tr>
 <th>用户名</th>
<td><input type="text" name="username" size="25"></td>
</tr>
<tr>
<th>密&nbsp;&nbsp;码</th>
<td><input type="password" name="passwd" size="25"></td>
</tr>
<tr>
<td colspan="2" align="center">
 <input type="submit" name="sub" value="登录">
 <input type="reset" value="重置">
</td>
</tr>
</form>
</table> 
</body>
</html>
