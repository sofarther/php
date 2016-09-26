<?php
  class Mystack{
    private $top=-1;//指向栈顶
    private $max_size=10;
   private $arr=array();//使用数组实现，栈顶为数组的末尾

   function push($data){
     if($this->top>=$this->max_size-1){
         array_shift($this->arr);
         $this->top--;
      }
       $this->arr[++$this->top]=$data;
    }
   //判断是否为空
   function isEmpty(){
     return ($this->top==-1)?true:false;
  }
    function pop(){
     if(!$this->isEmpty()){
      $this->top--;
      return array_pop($this->arr);
      }	else{
     return null;
     }
    }
  //只获取栈顶的值，并不弹出
   function getTop(){
    if(!$this->isEmpty()){
      return $this->arr[$this->top];
      }else{
     return null;
     }
   }
 //遍历栈中数据
  function iterateStack(){
    if(!$this->isEmpty()){
     for($i=$this->top; $i>=0; $i--){
     echo "Stack[$i]=".$this->arr[$i]."<br/>";
     }
    }
   else{
    echo "该栈没有数据";
   }
   }
   }
 /* 
  $mystack = new Mystack();
   $mystack->push("m");
   $mystack->push('b');
  $mystack->push(43);
  $mystack->push(24);
   $mystack->push("s");
   $mystack->push('v');
  $mystack->push(90);
  $mystack->push(55);
   $mystack->push("u");
   $mystack->push('r');
  $mystack->push(33);
  $mystack->push(64);
  
  $mystack->iterateStack();
  echo "<br/>";
  echo $mystack->pop();
  echo "<br/>";
  echo $mystack->pop();
  echo "<br/>";
  echo $mystack->pop();
  echo "<br/>";
  $mystack->iterateStack();
  echo $mystack->getTop();
  echo "<br/>";
 $mystack->iterateStack();

*/
?>
