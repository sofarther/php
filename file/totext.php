<!DOCTYPE html>
<html> 
<head>
<meta charset="utf-8"/>
</head>
<body>
<form action="totext.php" method="post">
<input type="text" name="desdir"/>
<input type="submit" name="submit" value="转化"/>
</form>
<?php
  function html2text($file){
    $parent= substr(dirname($file),strrpos(dirname($file),'/'));
     $content=file_get_contents($file);
     $text = strip_tags($content,"p");
     $arr=array("<p>","</p>");
     $text = str_ireplace($arr,"\r\n",$text);
     $text=preg_replace("/[\\n\\r]{3,}/","\n\r\n\r",$text);
     $newfile = dirname($file).'/'.$parent.".txt";
     file_put_contents($newfile,$text,FILE_APPEND);
   }
   if(isset($_POST['submit'])){
          
         if(is_dir($_POST['desdir'])){
           $dirname=rtrim($_POST['desdir'],'/');
       $filelist = scandir($_POST['desdir']);
          natcasesort($filelist);    
       }elseif(is_file($_POST['desdir'])){
         $filelist =array(basename($_POST['desdir']));
          $dirname=dirname($_POST['desdir']);
       }else{
           echo "请输入文件名或目录名";
          exit;
       }
       foreach($filelist as $file){
            if(substr($file,strrpos($file,"."))==".html"){
               html2text($dirname."/$file");
             }
        }
    }
?>
</body>
</html>
