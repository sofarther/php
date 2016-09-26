<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>
 <table width="400px" align="center" border="1px" cellspacing="0px">
  <caption><h3><{$caption}></h3></caption>
  <tr>
  <{foreach from=$fields item=col}>
   <th><{$col}></th>
  <{/foreach}>
  </tr>
  
 <{section name=row loop=$rows}>
  <tr>
  <{section name=col loop=$rows[row]}>
   <{if $smarty.section.col.first}>
    <td><{$smarty.section.row.iteration}></td>
   <{else}>
    <td><{$rows[row][col]}></td>
  <{/if}>
  <{/section}>
  </tr>
 <{/section}>
</table>
<hr>
 <center>
 <a href="pageEach.php?id=0">|&lt;</a>
 &nbsp;&nbsp;&nbsp;&nbsp;
 <a href="pageEach.php?id=<{$prev}>">&lt;&lt;</a>
 &nbsp;&nbsp;&nbsp;&nbsp;
<a href="pageEach.php?id=<{$next}>">&gt;&gt;</a>
 &nbsp;&nbsp;&nbsp;&nbsp;
<a href="pageEach.php?id=<{$pageCount}>">&gt;|</a>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
当前页显示的记录为：
<b><{$offset+1}>—<{$end+1}></b>
 &nbsp;&nbsp;&nbsp;&nbsp;
第<i><{$current+1}>/<{$pageCount}></i>页
</center>
</body>
</html>
