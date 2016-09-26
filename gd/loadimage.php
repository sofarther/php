<?php
  header("Content-type:image/jpg");
  header('content-disposition:attachment;filename="hand.jpg"');
 header('Content-length:'.filesize('hand.jpg'));
echo file_get_contents('hand.jpg');
?>
