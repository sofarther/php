<html>
 <head><meta http-equiv="content-type" content="text/html;charset=utf-8"/>
  <script type="text/javascript">
//在javascript 中嵌套PHP代码
//文件中的所有PHP代码都被解析为HTML代码，但不会解析接受其他输入的变量中包含的PHP代码
//因为PHP代码是在服务端先执行，生成HTML文件，返回到浏览器，此时PHP代码已被执行，并输出执行的结果
    function showMsg(){
     var str = "<?php echo 'hello'; ?>";
    alert("Message:"+str);
    }
 </script>
</head>
 <body>
  <img src="/images/jinshidun.png"/><br/>
<!--对于src、 超链接、重定向，都是在客户端发送请求到服务端来完成的，所以/表示服务端的虚拟主机的文档根目录-->
<!--而对于在PHP中文件的操作，以及include,require等实在服务端执行的，所以/表示服务端的文件系统的根目录-->
  <?php
    echo '<img src="/images/jinjie.png"/>';
   ?>

<br/>
<input type="button" value="Click" onclick="showMsg()"/>
</body>
</html>
