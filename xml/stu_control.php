<?php
  require_once "xml.php";
  
  $xml = new XmlComm("my.xml");
  $ids = $xml->getStuIds();
 if(isset($_POST['add'])){
    if( in_array($_POST['id'],$ids)){
     header("Location:addStu.php?error=1");
     exit();
    }
  


   if($xml->addStu($_POST) && $xml->saveXML()){
     header("Location:success.php?opt=1");
     exit();
   }else{
    header("Location:fail.php?opt=1");
    exit();
   }
 
  }

  if(isset($_POST['update'])){
    // var_dump($_POST);

   if($xml->updateStu($_POST) && $xml->saveXML() ){
   header("Location:success.php?opt=2");
   exit();
   }else{
   header("Location:fail.php?opt=2&id={$_POST['id']}");
  exit();
   }

  }
  if(isset($_POST['delete'])){
    if($xml->deleteStu($_POST['id']) && $xml->saveXML()){
     header("Location:success.php?opt=3");
    exit();
   }else{
   header("Location:fail.php?opt=3");
  exit();
  }
 }
?>
