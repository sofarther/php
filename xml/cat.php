<html>
 <head>
 <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
 </head>
 <body>
  <?php
// 获取文件中的内容
  //$xml_element = simplexml_load_file("cats.xml");
$str=<<<XML
<?xml version="1.0" encoding="utf-8"?>
<cats>
  <cat>
      <name>Jack</name>
      <age>2</age>
      <color>grey</color>
      <color>white</color>
  </cat>
  <cat>
      <name>Maxwell</name>
      <age>12</age>
      <color>orange</color>
      <color>black</color>
  </cat>
<dog><name>dg</name><age>4</age></dog>
<cat><name>qqq</name><age>5</age><color>yellow</color></cat><cat id="new"><name>mmm</name><age>8</age><color>yellow</color></cat></cats>

XML;
//获取字符串中的内容
$xml_element=simplexml_load_string($str);
/*
  SimpleXML将一个节点的所有标签子节点的标签名作为一个属性名，相同的标签名的节点则该属性的属性值为数组
  每个数组元素为SimpleXML对象
*/
   //var_dump($xml_element);//SimpleXMLElement
  //$cats = $xml_element->cat;
  //$cat1 = $cats[0];
  //var_dump($cat1); //SimpleXMLElement
//添加标签节点
/*
  $new_cat =$xml_element->addChild("cat");
  $new_cat_name= $new_cat->addChild("name","mmm");
  $new_cat->addChild("age","8");
  $new_cat->addChild("color","yellow");
  $cats = $xml_element->cat;
  echo $cats[2]->name;
*/
//添加属性
  //$new_cat->addAttribute("id","new");
//count（）返回子标签节点的个数
 // echo $cats[1]->count(); //4
  //echo $xml_element->count(); //3
  //保存到文件,若没有提供文件名，则会直接输出当前DOM树内容
 // $xml_element->asXML("cats.xml");

  //遍历子节标签点
 
   
  $subs = $xml_element->children(); //所有子标签节点
//既可以通过数组形式遍历，也可以使用对象属性访问
 echo $subs->dog->name."<br/>";   
foreach($subs as $tag){
    echo $tag->getName();
   }
 //访问属性
$cats = $xml_element->cat;
  $cat3 = $cats[3];
echo $cat3->name;
  $attr = $cat3->attributes();
  //var_dump($attr);
  echo $attr->id;
 ?>
 </body>
</html>
