<?php
  class MyTpl {
  function __construct($template_dir='./templates/',$compile_dir='./templates_c/'){
   $this->template_dir=rtrim($template_dir,'/')."/";
  $this->compile_dir = rtrim($compile_dir,'/').'/';
$this->tpl_vars = array();
}
//为模板中的变量赋值
//模板中有三种变量： 1.<{$var}>显示变量值的变量; 2.<{if(...)}> 中变量，
//3.<{loop $var ...}>中要遍历显示内容的变量和遍历变量
//其中遍历变量由遍历语句自行为其赋值，其他变量若不是引用遍历变量，则需要通过assign()传递参数赋值
//模板中的所有变量都位于一个语句中，在模板中没有赋值语句，所以只有以下语句：echo ,if ,foreach
//对模板的编译就是将模板中变量和该变量所在的语句标识替换为PHP语句，即替换文本一定是个语句，而不是一个变量
function assign($tpl_var,$value=null){
  if($tpl_var!='')
   $this->tpl_vars[$tpl_var]=$value;
}
function display($filename){
  $tplFile=$this->template_dir.$filename;
  if(!file_exists($tplFile))  return false;
 $comFile = $this->compile_dir.'com_'.basename($filename).'.php';
//判断替换后的文件是否存在或是存在但有改动
if(!file_exists($comFile) || filemtime($comFile)<filemtime($tplFile)){
   $repContent=$this->tpl_replace(file_get_contents($tplFile));
  $handle = fopen($comFile,'w+');
fwrite($handle,$repContent);
 fclose($handle);
 
}
//生成的PHP文件不能直接解析，只能在该类中进行解析
include($comFile);
}

private function tpl_replace($content){
 $pattern =array(
//匹配<{$var}>形式的变量
   '/<\{\s*\$([a-zA-Z_\x7f-\xff][a-zA-Z_0-9\x77-\xff]*)\s*\}>/i',
 //匹配<{if()}>中的变量和包含语句，结束标识<{/if}>
  '/<\{\s*if\s*(.+?)\s*\}>(.+?)<\{\s*\/if\s*\}>/ies',
  //匹配<{elseif()}>中的变量和执行语句
 '/<\{\s*else\s*if\s*(.+?)\s*\}>/ies',
//匹配<{else}>标识
'/<\{\s*else\s*\}>/is',
//匹配<{loop $var $val}>中的变量，包含语句，结束标识<{/loop}>
'/<\{\s*loop\s*\$(\S+)\s+\$([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)\s*\}>(.+?)<\{\s*\/loop\s*\}>/is',
//匹配<{loop $var $key=> $val}>中的变量，包含语句，结束标识<{/loop}>
'/<\{\s*loop\s+\$(\S+)\s+\$([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)\s*=>\s*\$(\S+)\s*\}>(.+?)<\{\s*\/loop\s*\}>/is',
//匹配<{include}>
'/<\{\s*include\s+[\'"]?(.+?)[\'"]?\s*\}>/ie'
);
$replacement =array(
//{$var}>形式的变量为显示变量值的变量，所以要使用echo
 '<?php echo $this->tpl_vars["${1}"]; ?>',
//对<{if()}>中的变量进行声明
'$this->stripvtags(\'<?php if(${1}) {?>\',\'${2} <?php } ?>\')',
'$this->stripvtags(\'<?php } elseif(${1}) { ?>\',"")',
'<?php } else { ?>',
//对<{loop}>中变量进行声明
'<?php foreach($this->tpl_vars["${1}"] as $this->tpl_vars["${2}"]) {?>${3}<?php }?>',
'<?php foreach($this->tpl_vars["${1}"] as $this->tpl_vars["${2}"] => $this->tpl_vars["${3}"]) { ?>${4} <?php } ?>',
'file_get_contents($this->template_dir."${1}")'
);
$repContent =preg_replace($pattern,$replacement,$content);
if(preg_match('/<\{([^(\}>)]{1,})\}>/',$repContent)){
   $repContent=$this->tpl_replace($repContent);
}
 return $repContent;
}
//参数expr 提供模板中条件语句的开始标记
//参数statement 提供模板条件语句的结束标记
private function stripvtags($expr,$statement=""){
  $var_pattern='/\s*\$([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\xx7f-\xff]*)\s*/is';
 $expr =preg_replace($var_pattern,'$this->tpl_vars["${1}"]',$expr);
$expr =str_replace("\\\"","\"",$expr);
$statement = str_replace("\\\"","\"",$statement);
return $expr.$statement;
}
}
?>
