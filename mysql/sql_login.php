<html>
  <head>
   <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
  </head>
 <body>
   <form action="sql_ctrl.php" method="post">
    <table>
     <tr>
     <td>username: </td><td><input type="text" name="username"/></td>
     </tr>
     <tr>
     <td>password:</td><td><input type="password" name="passwd"/> </td>
     </tr>
     <tr><td><input type="submit" name="login" value="login" /></td>
<!--当submit 组件 name属性不为submit 时，button组件可以通过onclick来提交表单，此时提交的数据没有submit组件的name索引-->
      <td><input type="button" name="regist"value="regist" onclick="return submit()"  /> </td></tr>
    </table>
  </form>
 </body>
</html>
