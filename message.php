<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=uft-8">
</head>
<body>
<?php
error_reporting(E_ALL&~E_NOTICE );
$filename="file/message.txt";
 if(isset($_POST['sub'])){
   $message=$_POST['user']."||".$_POST['title']."||".$_POST['tip']."<|>";
   writeMessage($filename,$message);
}
 if(file_exists($filename)){
    readMessage($filename);
}
function writeMessage($file,$data){
  $fp=fopen($file,"a");
 if(flock($fp,LOCK_EX)){ //进行排他锁锁定，当锁定成功时，才对文件进行写入
    fwrite($fp,$data);
  flock($fp,LOCK_UN);  //释放锁定
} else { echo "不能锁定文件";

}
  fclose($fp);
}
function readMessage($file){
  $fp=fopen($file,"r");
flock($fp,LOCK_SH);
$buff="";
while(!feof($fp)){
  $buff.=fread($fp,1024);
}
flock($fp,LOCK_UN);
fclose($fp);
$data=explode("<|>",$buff);
foreach($data as $msg){
  list($user,$title,$tip)=explode("||",$msg);
  if($user!="" && $title!="" && $tip!=""){
     echo $user."说：";
    echo "&nbsp;".$title."<br/>";
    echo $tip."<hr/>";
}
}
}
?>
<form action="" method="post">
用户名：<input type="text" name="user" size="10" ><br/>
标&nbsp;&nbsp;题: <input type="text" name="title" size="30"><br/>
<textarea name="tip" rows="4" cols="40">请输入留言信息</textarea>
<input type="submit" name="sub" value="留言">
</form>
</body>
</html>
