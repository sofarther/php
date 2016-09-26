<?php
//在PHP中，顶层的Class被命名为“stdClass”，看成是一个不含任何属性和方法的类。
//可以创建一个空对象,然后向其中添加属性，无法动态添加方法
 $obj =new stdClass();
  $obj->name='sofar';
  $obj->sex='male';
  //$obj->say = function($msg){ echo $msg;};
//foreach 遍历了对象其能够访问的可见属性。
  foreach($obj as $k => $v){
   echo $obj->$k;
  }
 // $obj->say('hello');
  $func = function($msg){
    echo $msg;
  };
  $func('hello');
  $obj->say=$func;
   //无法动态添加方法
  //$obj->say('hello');
//访问私有方法
class Test{
	private function _func1($a){
	echo '$a='.$a;
	}
	public function __call($name,$args){
		$this->$name($args[0]);
	}
}
function foobar($arg1,$arg2){
	echo __FUNCTION__.'get'.$arg1.' and '.$arg2;
}
call_user_func_array('foobar',array(123,456));
/*
 在php5.5中可以直接使用以下形式来访问私有方法，但在php5.2中，则必须使用
class Test {
 
    public function __call($strName, $arrParams) {
        $strTrueName = '_'.$strName;
        return call_user_func_array(array($this, $strTrueName), $arrParams);
    }
 
    private function _getInfo() {
        return '私有方法';
    }
}
 
$t = new Test();
var_dump($t->getInfo())

即对私有方法名不能直接访问，需动态拼接
call_user_func_array(array($object,$method),$args=array())
第一个参数为 回调方法，字符串类型表示 回调的函数名
	数组类型表示 对象的方法，第一个元素为对象引用，第二个元素为方法名
第二个参数为调用回调函数的参数数组
*/
class Test1{
	private function _func1($a){
	echo '$a='.$a;
	}
	public function __call($name,$args){
		call_user_func_array(array($this,$name),$args);
	}
}
$t =new Test();
$t->_func1(100);
$t1= new Test1();
$t1->_func1(200);
?>
