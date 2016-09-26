<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
 <title> <?php echo $this->tpl_vars["title"]; ?> </title>
</head>

<table border="1px" align="center" cellspacing="0px" cellpadding="0px" width="600px">
<caption><h3> <?php echo $this->tpl_vars["tableName"]; ?> </h3></caption>
<tr bgcolor="#cccccc">
 <th>name</th><th>class</th><th>math</th><th>english</th><th>history</th>
</tr>
<?php foreach($this->tpl_vars["stus"] as $this->tpl_vars["stu"]) {?>
 <tr>
  <?php foreach($this->tpl_vars["stu"] as $this->tpl_vars["colkey"] => $this->tpl_vars["colval"]) { ?>
    <td>
   <?php if($this->tpl_vars["colkey"]== "math") {?>
       <?php if($this->tpl_vars["colval"]>=90) {?>
           A
       <?php } elseif($this->tpl_vars["colval"]>=80) { ?>
           B  
      <?php } elseif($this->tpl_vars["colval"]>=70) { ?>
           C
    <?php } elseif($this->tpl_vars["colval"]>=60) { ?>
          D
    <?php } else { ?>
        E
  <?php } ?>
 <?php } else { ?>
<?php echo $this->tpl_vars["colval"]; ?>
 <?php } ?>
 </td>
<?php }?>
<tr>
 <?php } ?>
</table>
<center> 共查询找到<b> <?php echo $this->tpl_vars["rowNum"]; ?> </b> </center>
<hr>
<center> &sect;&sect; &sect;&sect; &sect;&sect; &sect;&sect;
author : <?php echo $this->tpl_vars["author"]; ?> 
 &sect;&sect; &sect;&sect; &sect;&sect; &sect;&sect; &sect;&sect;
</center>
</body>
</html>
 
