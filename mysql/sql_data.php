<?php
  class sql_data{
    
   private $conn;
   private $stmt;
   function __construct($host="localhost", $user="root", $passwd="", $dbname="php"){
      $this->conn = new mysqli($host, $user, $passwd,$dbname) or die("连接失败") ;
     $this->stmt=  $this->conn->prepare("select * from users where uname=? and passwd=md5(?)");

    $this->conn->query("set names utf8"); 
  }
   function show_result($sql){
     $res = $this->conn->query($sql);
    if($this->conn->errno){
     echo "查询失败：".$this->conn->error;
    return;
     }
     if($res->num_rows >0){
        while($row = $res->fetch_assoc()){
           foreach($row as $key=>$val){
                  echo "--$val--";
  
          }
         echo "<br/>";
       }
     }else{
      echo "没有查到数据";
    }
     $res->free();
   }
  function insert($sql){
    if($this->conn->query($sql)){
    echo "插入数据成功<br/>";
    echo "新添加的ID：".$this->conn->insert_id;
     }  else{
   echo "插入数据失败";
    }
  }
 function execute($username,$passwd ){
 $this->stmt->bind_param('ss',$username,$passwd);
       if($this->stmt->execute()){
           $this->stmt->bind_result($id,$name,$pwd);
          while($this->stmt->fetch()){
         echo "--$id--$name--$pwd<br/>";
        }
     }else{
      echo "查询失败";
     }

  }
  function __destruct(){
      $this->stmt->close();
    $this->conn->close();
   }
  }
?>
