<?php
 session_start();
header("content-type:text/html;charset=utf-8");
if(isset($_SESSION['uid']) && isset($_SESSION['uname'])){
 require("mail_connect.php");
  $query = "select mailfrom ,subject ,maildt from mails where uid=? ";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('i',$_SESSION['uid']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($mf,$subj,$mdt);
 echo "欢迎回来 ".$_SESSION['uname']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo '<a href="mail_login.php?action=logout">退出</a>';
echo "<hr>";
echo '<table align="center" width="700px" border="1px" cellspacing="0px" cellpadding="0px">';
echo "<caption><h3>共有".$stmt->num_rows."个邮件</h3></caption>";
echo '<tr><td>序号</td><td>发件人</td><td>主题</td><td>日期</td></tr>';
$num=1;
while($stmt->fetch()){
 echo "<tr>";
 echo "<td>".$num."</td>";
echo "<td>".$mf."</td>";
echo "<td>".strcut($subj)."</td>";
echo "<td>".$mdt."</td>";
echo "</tr>";
$num++;
}
echo "</table>";
$stmt->close();
$mysqli->close();
}else header("Location:mail_login.php");

function strcut($str){
  if(strlen($str)>20){
   $st = substr($str,0,10);
  $ed =substr($str,strlen($str)-7);
 return $st."...".$ed;
}
else return $str;
}
?>
