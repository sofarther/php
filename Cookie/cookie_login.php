<?php
error_reporting(E_ALL &~E_NOTICE);
function clearCookie(){
 setCookie('username','',time()-3600);
 setCookie('islogin','',time()-3600);
}
if($_GET['action']=="login"){
//clearCookie();
  if($_POST['username']=="sofar" && $_POST['passwd']=="sofarther"){
  //向Cookie设置标示符为username，值为表单提交的数据，保存期限为1小时  
   setCookie('username',$_POST['username'],time()+60*60);
 //向Cookie设置标示符为islogin，表示登录状态，保存期限为1小时
    setCookie('islogin','1',time()+60*60,'/php/Cookie');
  header("Location:cookie_index.php");
  //header("Location:cookie_test.php");
  //当设置了COOKIE后，不能马上生效，在刷新该页面或跳转到下个页面时才生效
 //故，下面代码只显示array([PHPSESSID] => 32frbmjq8unbn11lqtopem3hr5 )
 //刷新后显示：
//Array ( [username] => sofar [islogin] => 1 [PHPSESSID] => 32frbmjq8unbn11lqtopem3hr5 ) 
// print_r($_COOKIE);
} else die("用户名和密码错误");
}
 elseif($_GET['action']=="logout"){
   clearCookie();
}
?>
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8" >
<script type="text/javascript" src="http://localhost/js/cpt16_cookie.js" ></script>
<script type="text/javascript">
  window.onload = function(){
   var sName = getCookie("username");
    if(sName){
      var oForm = document.forms[0];
       oForm.username.value = sName;
     }
 };
  setCookie("msg","hello");
</script>
<title>用户登录</title>
</head>
<body>
<table width="400px" align="center" border="0px" cellspacing="0px" cellpadding="5px">
<caption>用户登录</caption>
<form action="/php/Cookie/cookie_login.php?action=login" method="post">
 <tr>
   <th>用户名</th>
   <td>
  <input type="text" name="username" size=25>
  </td></tr>
<tr>
  <th>密&nbsp;&nbsp;码</th>
  <td>
  <input type="password" name="passwd" size=25>
  </td>
 </tr>
 <tr><td colspan="2" align="center">
   <input type="submit" name="sub" value="登录">
  <input type="reset"  value="重置">
 </td></tr>
</form>
</table>
</body>
</html>
