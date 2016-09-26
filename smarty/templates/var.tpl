<{include "header.tpl"}>
<{if $num is odd}> <{$num}> is a add<br/>    <{*判断是否为奇数*}>
<{elseif $num is even }> <{$num}> is a even<br/> <{*判断是否为偶数*}>
<{/if}>
<{config_load file="var.config" scope="global" }>
<{config_load file="var.config" section="Table"}>
<table width="<{#TableWidth#}>" align="<{#Align#}>" cellspacing="<{#CellSpace#}>" border="<{#TableBorder#}>">
<caption><font color="<{#Color#}>"<h3><{$caption}></h3></font></caption>
<tr bgcolor="<{#bgColor#}>" >
<th>number</th>
<{foreach name=cols from=$cols item=col}>
  <th><{$col->name}></th>
<{foreachelse}>
<p>数组 <{$cols}> 中没有任何值</p>
<{/foreach}>
</tr>
<{literal}>
<{foreach from=$students item=stu name=stds}>
 <tr bgcolor= <{if $smarty.foreach.stds.iteration%2==1 }> "<{$smarty.config.bgColor1}>"<{else}> "<{$smarty.config.bgColor2}>" <{/if}>  >
 <td><{$smarty.foreach.stds.iteration}></td>
  <{foreach from=$stu key=col item=value name=std}>
     <td><{$stu.$col}></td>
<{/foreach}>
</tr>

<{/foreach}>
<{/literal}>
 <{foreach $students as $k=>$v}>
   <tr>
    <td><{$k}></td><td><{$v.stu_name}></td><td><{$v.math}></td><td><{$v.english}></td><td><{$v.history}></td>
  </tr>
 <{/foreach}>
</table>
<br/>
 <p>共有<b><{$smarty.foreach.stds.total}></b>条记录</p> 
<{include "footer.tpl"}>
