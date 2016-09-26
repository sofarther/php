<{include file="header.tpl" title="section test"}>
<table border="1px" width="500px" cellspacing="0px" align="center">
<tr><td>序号</td><td>姓名</td><td>数学</td><td>英语</td><td>历史</td>
</tr>
<{section name=line loop=$students start=0 }>
 <tr>
 <td><{$smarty.section.line.iteration}></td>
 <{section loop=$students[line] name=col}>
  <td><{$students[line][col]}></td>
<{/section}>
</tr>
<{/section}>
</table>
<{"this is a `$t[1].name` test <br/>" }>
<{"\$_GET['id']=`$smarty.get.id` <br/> "}>
<{$smarty.get.id}>
<{"__FILE__ is `$smarty.const.__FILE__`<br/>"}>
<{$smarty.const.PHP_OS}>
<{$smarty.const.MY_CONST_VAL}>
<{section name=stu loop=$students}>
  <{if $smarty.section.stu.first}>
     <hr>
  <{/if}>
   <{$smarty.section.stu.index}>.<{$students[stu][0]}>
   <br>
 <{if $smarty.section.stu.last}>
     <hr>
 <{/if}>
<{/section}>
<center>共有<b><{$smarty.section.stu.total}></b>行</center>
<hr>
<{if $num1 is div by $num2}> 
  <p><b><i>34能被12整除</i></b></p>
<{else}> <b><i>34不能被12整除</i></b>
<{/if}>
<{include file="footer.tpl" author="sofar"}>
