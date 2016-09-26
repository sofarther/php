
<?php
//函数名必须是smarty_function_函数名，参数也必须是以下形式
//文件名为function.函数名.php
function smarty_function_sofar($args,&$smarty){
 $str=""; 
    for($i=0; $i<$args['times']; $i++){
     $str.="<font color='{$args['color']}' size='{$args['size']}'>{$args['content']}</font><br/>";
   }
 //返回值为显示的内容
  return $str;
}

?>
