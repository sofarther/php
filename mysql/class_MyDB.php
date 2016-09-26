<?php
  class MyDB{
   protected $mysqli;
  protected $showErr;
public function __construct($configFile="password.inc.php",$showErr=TRUE){
  require($configFile);
 $this->mysqli = new mysqli($dbhost,$user,$passwd,$dbname);
if(mysqli_connect_errno()){
  $this->printError("连接失败，原因：".mysqli_connect_error());
  $this->mysqli=FALSE;
  exit();
}
$this->showErr=$showErr;
}
protected function printError($err){
  if($this->showErr) echo '<p><font color="red">'.htmlspecialchars(stripslashes($err)).'</font></p>';

}
public function close(){
  if($this->mysqli) $this->mysqli->close();
$this->mysqli=FALSE;
}
public function __destruct(){
  $this->close();
} 
}
?>
