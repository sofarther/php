<?php
  require_once "smarty_conf.inc.php";

   //自定义函数
  function myhandler($args){
     //标签中的属性以键值对的数组形式传入
     $str=""; 
    for($i=0; $i<$args['times']; $i++){
     $str.="<font color='{$args['color']}' size='{$args['size']}'>{$args['content']}</font><br/>";
   }
 //返回值为显示的内容
  return $str;
  }

//自定义块:<{tag}>...<{/tag}>
//$agrs为标签的属性键值对数组，$content为块包含的内容
//块标签在调用时，会先以以下参数调用myblock(array('times'=>"5",'size'=>"5",'color'=>"blue"), null）
//会输出5个空行
  function myblock($args,$content){
   $str=""; 
   if(isset($content)){//需添加该判断条件
    for($i=0; $i<$args['times']; $i++){
     $str.="<font color='{$args['color']}' size='{$args['size']}'>$content</font><br/>";
   }
 }
 //返回值为显示的内容
  return $str;
  }
 //注册自定义函数，指定函数调用的标签
//register_function,register_block函数已不再使用，整合到registerPlugin
//在模板中调用形式：<{showmsg times="10" content="hello,world" size="4" color="aqua"}>
  $tpl->registerPlugin('function',"showmsg","myhandler");
 
//注册块 调用形式：<{msg times="5"  size="5" color="blue"}>你好！<{/msg}>
 $tpl->registerPlugin("block","msg","myblock");
 
  $tpl->display("myfunc.tpl");
?>
