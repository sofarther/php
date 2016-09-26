<?php
  $canv = imagecreatetruecolor(500,400);
 $white = imagecolorallocate($canv,0xff,0xff,0xff);
$gray = imagecolorallocate($canv,0xc0,0xc0,0xc0);
$ff = imagecolorallocate($canv,0xdd,0xdd,0xdd);
$red =imagecolorallocate($canv,0xff,0x00,0x00);
$blue =imagecolorallocate($canv,0x00,0x00,0xff);
imagefill($canv,0,0,$white);
imagesetpixel($canv,50,100,$red);
imagesetpixel($canv,100,200,$blue);
imageline($canv,50,50,100,100,$ff);
imagerectangle($canv,20,20,250,220,$gray);
imagefilledrectangle($canv,270,30,400,150,$blue);
$point =array(40,240,180,300,155,390,100,300,40,240);
imagefilledpolygon($canv,$point,5,$blue);
imageellipse($canv,350,300,100,80,$gray);
header("Content-type: image/png");
imagepng($canv);
imagedestroy($canv);
?>
