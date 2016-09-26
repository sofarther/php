<?php

   $image = imagecreatefromjpeg('hand.jpg');
	//裁剪图片
   //$img =imagecrop($image,array('x'=>10,'y'=>10,'width'=>100,'height'=>100));
 //缩放图片
 $img=imagescale($image,200,100);
  //  echo  imagepng($img,'hand1.png');	
 //获取图像信息，返回的数组索引0为宽度，1为高度， 2为类型常量
  $info =getimagesize('hand.jpg');

	var_dump($info);
  //获取图像的类型: 将类型常量转换为类型名：true表示带.
   echo image_type_to_extension($info[2],true);

  echo  imagejpeg($img,'hand1.png');	
?>
