<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <title>information</title>
</head>
 <body>
  <?php
  //ini_set('display_errors',1);
   //error_reporting(E_ALL & ~E_NOTICE);
  //接受info.hmtl提交的数据
   var_dump($_POST['course']);//当没有指定索引时，提交的数组是索引数组
    $sysos=$_SERVER["SERVER_SOFTWARE"];
    $sysversion=PHP_VERSION;
   mysql_connect("127.0.0.1","root", "");
  $mysqlinfo=mysql_get_server_info();
   if(function_exists("gd_info")){
        $gd=gd_info();
        $gdinfo=$gd['GD Version'];
        
     } else{ $gdinfo="unknown";}
   $freetype=$gd["FreeType Support"]? "support":"not support";
   $allowurl=ini_get("allow_url_fopen")? "support": "not support";
   $max_upload=ini_get("file_uploads")? ini_get("upload_max_filesize"):"Disabled";
   $max_ex_time=ini_get("max_execution_time")."s";
  
/*以HTML表格的形式将以上获取到的服务器信息输出给客户端浏览器*/
 echo "<table align=center celspacing=0 cellspadding=0>";
 echo "<caption><h2>系统信息</h2></caption>";
 echo "<tr><td>Web服务器：    </td><td>$sysos</td></tr>";
 echo "<tr><td>PHP版本：     </td><td>$sysversion</td></tr> ";  
 echo "<tr><td>MySQL库版本：</td><td>$mysqlinfo</td></tr>";
 echo "<tr><td>GD库版本：</td><td>$gdinfo</td></tr>";
 echo "<tr><td>FreeType:</td><td>$freetype</td></tr>";
 echo "<tr><td>远程文件获取:</td><td>$allowurl</td></tr>";
 echo "<tr><td>最大上传限制:</td><td>$max_upload</td></tr>";
 echo "<tr><td>最大执行时间:</td><td>$max_ex_time</td></tr>";
 
 echo "</table>";
  ?>
 </body>
</html>
