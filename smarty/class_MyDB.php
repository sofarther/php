<?php
class MyDB{
  protected $mysqli;
  protected $showErr;
 function __construct($passwd_inc="passwd.inc.php",$showErr=true){
    require($passwd_inc);
    $this->mysqli = new mysqli($dbhost,$username,$passwd,$dbname);
  if(mysqli_connect_errno()){
      $this->printErr(mysqli_connect_error());
      $this->mysqli=false;
     exit;
}
 $this->showErr=$showErr;
}
  function printErr($error){
   if($this->showErr){
      echo '<p><font color="red">'.htmlspecialchars(stripslashes($error)).'</font></p>';
}
}
function close(){
   if($this->mysqli){
     $this->mysqli->close();
    $this->mysqli=false;
}
}
function __destruct(){
  $this->close();
}
}
?>
