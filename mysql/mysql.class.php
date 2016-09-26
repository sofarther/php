<?php
 class MysqlTest{
  public   $conn;
 
 function  __construct(){
  $this->conn = mysql_connect("localhost","root","");
   mysql_select_db("school",$this->conn);
 }
function closeConnect(){
    mysql_close($this->conn);
}
}
?>
