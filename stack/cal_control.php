<?php
  require_once "Mystack.class.php";
  require_once "ExpreUtils.class.php";
  $exp = $_POST['exp'];
//  $exp="12+413-35-30";
  //定义两个栈：numStack和optStack,分别存放操作数和操作符
  $numStack=new Mystack();
  $optStack=new Mystack();
 $utils = new ExpreUtils();
 //解析运算表达式字符串
  $index=0;
  $keep_num="";
  
  while(true){
   $ch=substr($exp,$index,1);
  //入栈
   if($utils->isOperator($ch)){
     //将操作符之前的操作数直接入栈
  //当有()时，前后两个操作符的操作数可能为""
    if($keep_num!=""){
     $numStack->push($keep_num);
      $keep_num="";
     }
     //判断是否为空栈
    if(!$optStack->isEmpty()){
  //保证$optStack的栈顶的操作符的优先级大于栈中的操作符
         if($utils->getPrior($ch)>$utils->getPrior($optStack->getTop())){
           $optStack->push($ch);
       //当操作符为(时，直接入栈，等待)
        }elseif($utils->getPrior($ch)==-2){
           $optStack->push($ch);
        }else{
  //保证$optStack的栈顶的操作符的优先级大于栈中的操作符
 //在出栈计算时，同一级的操作符按入栈顺序进行计算，主要是对于- /运算
     while(!$optStack->isEmpty() &&  $utils->getPrior($ch)<=$utils->getPrior($optStack->getTop())){
         //第二操作数
          $num1 =$numStack->pop();
         //第一操作数
          $num2=$numStack->pop();
         $opt=  $optStack->pop();
        $res = $utils->getResult($num1,$num2,$opt);
        //将结果压入$numStack栈中
       $numStack->push($res);

         }
                
       
        //将新的操作符压入到$optStack栈中
       //当操作符为)时，上面代码将（）中的表达式计算结果压入$numStack栈
   //不需要再将）入栈，并将栈顶的（弹出
       if(!($utils->getPrior($ch)<0)){
       $optStack->push($ch);
      }
    elseif(!($optStack->isEmpty())&& $utils->getPrior($optStack->getTop())==-2){
        $optStack->pop(); 
      }
      }
     }else{
      $optStack->push($ch);
     }
   }else{
   //对于操作数，需判断下一个字符是否为操作数字符，
  //若是，则拼接并进行下一个字符。否则直接入栈
     $keep_num.=$ch;
   }
   $index++;
  if($index == strlen($exp) ){
  //判断最后一个是否为操作数,可能为)
   if(!$utils->isOperator($ch) ){
    //此时最后的操作数没有压入栈
   $numStack->push($keep_num);
   $keep_num="";
  }
    break;
 }
 }
/*
 while(!$optStack->isEmpty()){
   echo $optStack->pop()."<br/>";
  }
  while(!$numStack->isEmpty()){
  echo $numStack->pop()."<br/>";
  }
*/
 //此时操作符栈中的操作符为一个操作符
  while(!$optStack->isEmpty() ){
     $num1=$numStack->pop();
    $num2=$numStack->pop();
   $opt = $optStack->pop();
    $res = $utils->getResult($num1,$num2,$opt);
    $numStack->push($res);
  }
//结果
  echo $exp."=". $numStack->pop();
?>
