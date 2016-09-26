<html>
 <head>
  <meta http-equiv="content-type" content ="text/html;charset=utf-8"/>
 </head>
 <body>
  <?php
   require("sql_data.php");
    if(isset($_REQUEST['username']) && isset($_REQUEST['passwd'])){
      //$username = addslashes($_REQUEST['username']);
      //$passwd = addslashes($_REQUEST['passwd']);  
     $username=$_REQUEST['username'];
    $passwd =$_REQUEST['passwd'];
       $data = new sql_data();
   if(isset($_REQUEST['login'])){
  /*
     $sql = "select * from users where uname='$username' and passwd =md5('$passwd') ";
   echo "<font color='blue'>$sql</font><br/>";
       $data->show_result($sql);
   */
  $data->execute($username,$passwd);
  }
   else{
     $sql = "insert into users(uname,passwd) values('$username', '$passwd')";
    echo "<font color='aqua'>$sql</font>";
     $data->insert($sql);
 }
    
  }
  //print_r($_REQUEST);
  ?>
 </body>
</html>
