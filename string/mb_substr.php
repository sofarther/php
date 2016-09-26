<?php
$str="不是所有牛奶都叫特伦苏.jpg";
echo mb_substr($str,0,8,'utf-8');
echo '...';
echo strrpos($str,'.');
echo substr($str,strrpos($str,'.'));
echo strlen($str);
echo mb_substr($str,intval(strrpos($str,'.')/3),intval(strlen($str)/3)+1,'utf-8');
echo mb_strlen($str,'utf-8');
?>
