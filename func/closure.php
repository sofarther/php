<?php
/*
闭包是词法闭包(Lexical Closure)的简称，是引用了自由变量的函数，这个被应用的自由变量将和这个函数一同存在，即使离开了创建它的环境也一样，所以闭包也可认为是有函数和与其相关引用组合而成的实体。
 在一些语言中，在函数内定义另一个函数的时候，如果内部函数引用到外部函数的变量，则可能产生闭包。
  在运行外部函数时，一个闭包就形成了。

这个词和匿名函数很容易被混用，其实这是两个不同的概念，这可能是因为很多语言实现匿名函数的时候允许形成闭包。


*/
//PHP使用闭包(Closure)来实现匿名函数， 匿名函数最强大的功能也就在匿名函数所提供的一些动态特性以及闭包效果，匿名函数在定义的时候如果需要使用作用域外的变量需要使用如下的语法来实现:
function getCounter() {
    $i = 10;
//默认 值传递
    return function() use($i) { 
        echo ++$i;
echo "<br/>";
    };
}
 
$counter = getCounter();
$counter(); // 11
$counter(); // 11

function getCount(){
  $i=10;
// 使用引用传入变量: use(&$i)
  $var_func = function() use(&$i){
    echo ++$i . "<br/>";
  };
  return $var_func;  //引用函数的变量，并不是函数名，匿名函数没有函数名
}
$count = getCount();
$count(); //11
$count();  //12

echo gettype($count);// object
echo "<br/>";
echo get_class($count); //Closure
