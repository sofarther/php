<?php
$jpeg=imagecreatefromjpeg("hand.jpg");
//echo imagesx($jpeg);
//echo imagesy($jpeg);
$red = imagecolorallocate($jpeg,0xff,0x00,0x00);
$gray = imagecolorallocate($jpeg,0x00,0xff,0x00);
$prop = "图片大小：(".imagesx($jpeg)."&times;".imagesy($jpeg).")";

//imageString($jpeg,20,20,50,$prop,$red);
imagettftext($jpeg,10,0,50,50,$red,"/usr/share/fonts/truetype/droid/DroidSansFallbackFull.ttf",$prop);
imagestring($jpeg,10,300,80,"sofar",$gray);
imagestringup($jpeg,10,59,115,"sofar",$gray);
$str="sofar";
for($i=0,$j=strlen("sofar");$i<strlen("sofar");$i++,$j--){
   imagestring($jpeg,10,($i+1)*10,($i+2)*10,$str[$i],$gray);
   imagestringup($jpeg,10,($i+1)*10,10*($j+2),$str[$i],$gray);
}
header("Content-type:image/jpeg");
imagejpeg($jpeg);
imagedestroy($jpeg);
?>
