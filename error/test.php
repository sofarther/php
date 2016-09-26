<?php
//缓存的内容是要输出到浏览器的内容
//PHP不会在解析完整个文件后全部输出，而是解析到echo时，就会输出，只是输出内容并没有直接输出，
//而是在output_buffering中缓存，若关闭output_buffering,则会在PHP程序缓存
  //关闭 output_buffering
  // ob_end_clean();
//打开output_buffering时，以下代码不会报错
  echo "hello";
  header("Content-type:text/html;charset=utf-8");
  echo "world";
  //获取output_buffering中缓存内容

  echo ob_get_contents(); //helloworld,获取的内容仍会缓冲在output_buffering
//关闭output_buffering,并刷出缓存内容，返回bool,不会输出缓存内容
   // ob_end_flush();
 //关闭output_buffering,并返回缓存内容
  //echo ob_get_flush();//输出4个helloworld
//刷出output_buffering缓存内容，并清空output_buffering，函数返回空
  ob_flush();
 echo "<br/>";
 echo "output_buffering: ".ob_get_contents();
echo "<br/>";
//ob_flush 和flush区别：

  //output_buffering的缓存内容刷出时，内容将放到PHP程序缓存， flush刷新输出PHP程序的缓冲，
//此时，output_buffering中缓存内容：<br/>output_buffering:<br/>
 //PHP程序缓存中内容：helloworldhelloworld(即ob_flush()语句刷出的内容)
//关闭并清空output_buffering,使用PHP程序缓存
  ob_end_clean();
//因此输出的内容：helloworldhelloworld01234，而没有<br/>output_buffering:<br/>
//每隔1秒输出一个数
 for($i=0;$i<5;$i++){
      echo $i;
      sleep(1);
      flush();
  }
?>
