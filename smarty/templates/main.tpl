<{ include "header.tpl" }>
<table border="1px" align="center" cellspacing="0px" cellpadding="0px" width="600px">
<caption><h3> <{ $tableName }> </h3></caption>
<tr bgcolor="#cccccc">
 <th>name</th><th>class</th><th>math</th><th>english</th><th>history</th>
</tr>
<{ loop $stus $stu }>
 <tr>
  <{ loop $stu $colkey => $colval }>
    <td>
   <{ if $colkey == "math" }>
       <{ if $colval >=90 }>
           A
       <{ elseif $colval >=80 }>
           B  
      <{ elseif $colval >=70 }>
           C
    <{ else if $colval >=60 }>
          D
    <{ else }>
        E
 <{ /if }>
 <{ else }>
<{ $colval }>
<{ /if }>
 </td>
<{ /loop }>
<tr>
<{ /loop }>
</table>
<center> 共查询找到<b> <{ $rowNum }> </b> </center>
<{ include "footer.tpl"  }> 
