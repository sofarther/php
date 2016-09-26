<?php
error_reporting(E_ALL & ~E_NOTICE);
 class MyException extends Exception{
    function __construct($message,$code){
       parent::__construct($message,$code);
}
   public function __toString(){
   return __CLASS__.":[".$this->code."]: ".$this->message."<br/>";
}
 public function customFunc(){
    echo "使用自定义方法处理该异常";
}
}
 class TestException{
   private $var;
 function __construct($var=0){
  switch($var){
  case 1 : throw new MyException("传入值：1 是无效参数 ",5);
       break;
case 2 : throw new Exception("传入值：2 是无效参数 ",6);
    break;  
default:
   $this->var=$var;
 break;
}
 }
}
try{
  $testObj= new TestException(1);
  echo "**********************<br/>";
}
/*
 catch(Exception $e){
   echo "捕获默认异常：".$e->getMessage()."<br/>";
}
*/
//自定义的异常要放在Exception之前，否则因为自定义异常是Exception的
//子类而会先被Exceptiom捕捉
 catch (MyException $me){
   echo "捕获自定义异常：".$me."<br/>";
   $me->customFunc();
}
catch(Exception $e) { echo "捕捉默认异常： " .e.getMessage()."<br/>";
}
var_dump($testObj); //NULL
try{
  $testObj1= new TestException(0);
  echo "**********************<br/>";
} catch(Exception $e){
   echo "捕获默认异常：".$e->getMessage()."<br/>";
}
 catch (MyException $me){
   echo "捕获自定义异常：".$me."<br/>";
   $me->customFunc();
}
var_dump($testObj1);
try{
  $testObj2= new TestException(2);
  echo "**********************<br/>";
} catch(Exception $e){
   echo "捕获默认异常：".$e->getMessage()."<br/>";
}
 catch (MyException $me){
   echo "捕获自定义异常：".$me."<br/>";
   $me->customFunc();
}
var_dump($testObj2); //NULL
?>
