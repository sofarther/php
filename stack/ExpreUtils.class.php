<?php
  class ExpreUtils{
  //判断是否为操作符
   function isOperator($ch){
    if($ch=='+' || $ch=="-"||$ch=="*"||$ch=="/"||$ch=="("||$ch==")"){
       return true;
       }else{
    //否则为操作数
     return false;
     }
    }
   //返回操作符的优先级
   function getPrior($ch){
    if($ch=="*"||$ch=="/"){
       return 2;
     }elseif($ch=="+"||$ch=="-"){
     return 1;
    }
      elseif($ch=="("){
        return -2;
       }elseif($ch==")"){
       return -1;
      }
   }
  //计算结果
   function getResult($num1,$num2,$opt){
     $res =0;
  //$num1为第二操作数，$num2为第一操作数
    //- /区分第一操作数和第二操作数
     switch($opt){
     case "+": $res=$num1+$num2; break;
     case "-": $res=$num2-$num1; break;
    case "*": $res=$num1*$num2; break;
   case "/": $res=$num2/$num1; break;
     }
   return $res;
    }
   }
?>
