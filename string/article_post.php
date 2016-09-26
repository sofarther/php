<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>文章发布预览</title>
</head>
<body>
<?php
require("class_Article.php");
 $article=new Article($_POST["caption"],$_POST["content"],$_POST["parse"]);
 echo  $article->getCaption();
echo "<hr>";
echo  $article->getContent();
?>
</body>
</html>
