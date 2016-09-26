<?php
class XmlComm{
   private $xmldoc;
   private $name;
  function __construct($name){
   $this->name =$name;
   $this->xmldoc = new DOMDocument();
   $this->xmldoc->load($name);
  
  }
  function showAllStus(){
  //返回 DOMNodeList
    $stus = $this->xmldoc->getElementsByTagName("stu");
  
  try{
    for($i=0; $i<$stus->length; $i++){
      $stui =$stus->item($i);
    //获取属性
     //echo "student ID:".$stui->attributes->getNamedItem("id")->nodeValue."<br/>";
     echo "student ID:".$stui->getAttribute("id")."<Br/>";
       $childs = $stui->childNodes;
        for($j=0; $j<$childs->length; $j++){
         $childj=$childs->item($j);
        if($childj->nodeType == XML_ELEMENT_NODE) //判断节点类型
        echo "&nbsp;&nbsp;&nbsp;&nbsp;".$childj->tagName.":".$childj->nodeValue."&nbsp;&nbsp;";
       }
      echo "<br/>";
    }

   }catch(Exception $e){
     echo "获取节点列表错误".$e->getMessage();
   }
  }
   function getStuById($id){
     $stus = $this->xmldoc->getElementsByTagName("stu");
    for($i=0; $i<$stus->length; $i++){
      if($stus->item($i)->getAttribute("id") == $id) return $stus->item($i);
    }
    return null;
  }
 function addStu($stu=array()){
try{
    $fragment = $this->xmldoc->createDocumentFragment();
     $new_node = $this->xmldoc->createElement("stu");
     $new_node->setAttribute("id",$stu['id']);
//处理额外添加的属性
     if(isset($stu['attrs_extra'])){
      foreach($stu['attrs_extra'] as $attr=>$value){
         $new_node->setAttribute($attr,$value);
      }
     }
     $new_name = $this->xmldoc->createElement("name");
    $new_name->nodeValue=$stu['name'];
    $new_sex = $this->xmldoc->createElement("sex");
    $new_sex->nodeValue=$stu['sex'];
    $new_age = $this->xmldoc->createElement("age");
    $new_age->nodeValue =$stu['age'];
   
    $new_node->appendChild($new_name);
    $new_node->appendChild($new_sex);
    $new_node->appendChild($new_age);
  //处理额外添加的子标签
    if(isset($stu['tag_extra'])){
      foreach($stu['tag_extra'] as $tagname=>$value){
      $new_tag = $this->xmldoc->createElement($tagname);
      $new_tag->nodeValue=$value;
      $new_node->appendChild($new_tag);
     }
    }
   $fragment->appendChild($new_node);
//添加新节点需使用DOMDocument的documentElement获取的根节点，否则会添加到根节点之外
   $this->xmldoc->documentElement->appendChild($fragment);
  return true;
} catch(Exception $e){
   echo "添加失败".$e->getMessage();
   return false;
  }
   }
function updateStu($arr=array()){
  try{
    $stu = $this->getStuById($arr['id']);
    $attrs = $stu->attributes;
    for($i=0; $i<$attrs->length; $i++){
    $attr =$attrs->item($i) ;
     if($attr->name !="id"){
         $attr->value = $arr['attrs_extra'][$attr->name];
     }
    }
    $childs = $stu->childNodes;
   for($i=0; $i<$childs->length; $i++){
        $ichild =$childs->item($i);
       if($ichild->nodeType == XML_ELEMENT_NODE){
         if($ichild->tagName =="name" || $ichild->tagName == "sex" || $ichild->tagName=="age"){
             $ichild->nodeValue = $arr[$ichild->tagName];
         }else{
          $ichild->nodeValue = $arr['tag_extra'][$ichild->tagName];
        }
       }
   } 
   return true;
    }catch(Exception $e){
   return false;
   }
  }

  function deleteStu($id){
try{
   $stu = $this->getStuById($id);
    $stu->parentNode->removeChild($stu);
   return true;
  
  }catch(Excpetion $e){
   return false;
  }
  } 
  
 function saveXML(){
  $args = func_get_args();
   
    if(count($args)==1){
      $name = $args[0];
   }else
   $name =$this->name;
 try{
 return  $this->xmldoc->save($name);
 }catch(Exception $e){
   echo "保存文件失败".$e->getMessage();
   return false;
   }
  }
  function getBasicMeta(){
   return array("id","name","sex","age");
  }
  function getStuAttr($id){
   $stu = $this->getStuById($id);
   $attrs = $stu->attributes;
   $arr =array();
  for($i=0; $i<$attrs->length; $i++){
    $attr = $attrs->item($i);
    
       $arr[$attr->name] =$attr->value;
     }
   return $arr;
   }
 function getStuInfo($id){
  $stu = $this->getStuById($id);
 $arr =array();
  $childs = $stu->childNodes;
 for($i=0; $i<$childs->length; $i++){
   $ichild = $childs->item($i);
   if($ichild->nodeType == XML_ELEMENT_NODE){
  
    $arr[$ichild->tagName] = $ichild->nodeValue;  
   }
   }
  return $arr;
  }
  function getStuIds(){
   $stus = $this->xmldoc->getElementsByTagName("stu");
   $arr =array();
   for($i=0; $i<$stus->length; $i++){
     $istu = $stus->item($i);
      $arr[] = $istu->getAttribute("id");
   }
  return $arr;
  }
 }
/*
  $xmldoc = new DOMDocument();
  $xmldoc->load("my.xml");
  $stus = $xmldoc->getElementsByTagName("stu");
  //var_dump($stus); //DOMNodeList
   $stu = $stus->item(0);
  echo $stu->nodeValue."<br/>";//sofar male 25 China ,即去掉子节点标签后的内容
 //var_dump($stu); //DOMElement
  //$addrs = $stu->getElementsByTagName("country");
  //var_dump($addrs);//可访问到任意层的节点,但不能保持层次关系
   $child = $xmldoc->childNodes;
   echo $child->item(0)->nodeName;//class,即根节点
*/

 // $xml = new XmlComm("my.xml");
  // $xml->showAllStus();
/*
 $arr= array("id"=>"st002" , "name"=>"asd" ,"sex"=>"male" ,"age"=>"44" ,
             "attrs_extra"=>array("sn"=>"sn1"), 
               "tag_extra"=>array("email"=>"ss@mali.com","addr"=>"lbndlwtr"));
*/
 // $xml->addStu($arr);
   //$xml->updateStu($arr);
 // $xml->showAllStus();
// $xml->saveXML();
 //$stu_arr = $xml->getStuInfo("st002");
  //var_dump($stu_arr);

?>
