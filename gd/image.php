<?php
 
 //创建画布，在内存中开辟一块临时区域，并返回一个资源类型变量
  $image = imagecreatetruecolor(100,200);
//设置图像中所需的颜色
  $white = imagecolorallocate($image,0XFF,0XFF,0XFF);
  $gray = imagecolorallocate($image,0XC0,0XC0,0xC0);
  $darkgray = imagecolorallocate($image,0X90,0X90,0X90);
  $navy = imagecolorallocate($image,0X00,0x00,0x80); //深蓝色
 $darknavy = imagecolorallocate($image,0x00,0x00,0x50);//暗深蓝色
 $red = imagecolorallocate($image,0xff,0x00,0x00);
$darkred =imagecolorallocate($image,0x90,0x00,0x00);
$green = imagecolorallocate($image,0x00,0xff,0x00);
//为画布填充背景色
imagefill($image,0,0,$white);
//制作3D效果:循环绘制立体暗色效果
for($i=60;$i>50;$i--){
  imagefilledarc($image,50,$i,100,50,-160,40,$darknavy,IMG_ARC_PIE);
  imagefilledarc($image,50,$i,100,50,40,75,$darkgray,IMG_ARC_PIE);
  imagefilledarc($image,50,$i,100,50,75,200,$darkred,IMG_ARC_PIE);
}
//在立体暗色上再绘制亮色图形
imagefilledarc($image,50,50,100,50,-160,40,$navy,IMG_ARC_PIE);
imagefilledarc($image,50,50,100,50,40,75,$gray,IMG_ARC_PIE);
imagefilledarc($image,50,50,100,50,75,200,$red,IMG_ARC_PIE);
//绘制椭圆弧没有弧边界，只是用直线连接起点和终点
 imagefilledarc($image,25,150,50,50,-120,-30,$red,IMG_ARC_CHORD|IMG_ARC_NOFILL|IMG_ARC_PIE);
//绘制椭圆弧，用直线将起点和终点与中心点连接
 imagefilledarc($image,75,150,50,50,30,90,$green,IMG_ARC_EDGED|IMG_ARC_NOFILL);
imageString($image,1,15,55,"34.7%",$white);
imageString($image,1,45,35,"55.5%",$white);
header("Content-type:image/phg");//使用头函数告诉浏览器使用图像方式处理以下输出
//向浏览器动态输出图像
imagepng($image);
//echo imagesx($image);
//echo imagesx($image);
//销毁图像，释放资源
imagedestroy($image);
$jpeg=imagecreatefromjpeg("hand.jpg");
header("Content-type:image/jpeg");
imagejpeg($jpeg);
imagedestroy($jpeg);
?>
