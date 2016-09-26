<html>
 <head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
 </head>
 <body>
  <?php
   class Student{
   public $stu_no;
   public $stu_name;
  public $stu_age;
  public $stu_sex;
  
 function __construct($id,$name,$age,$sex){
    $this->stu_no =$id;
   $this->stu_name=$name;
   $this->stu_age=$age;
  $this->stu_sex =$sex;
   }
 function __tostring(){
  return "学号：".$this->stu_no." 姓名：".$this->stu_name." 性别：".$this->stu_sex." 年龄： ".$this->stu_age."<br/>";
  }
   }
 class LinkNode{
   public $data;
   public $next;

  function __construct($data=null,$next=null){
  //当创建一个新节点时，$next为null,在插入的链表时，链表的最后一个节点的
 // $next为null
   $this->data =$data;
   $this->next =$next;
  }
  }
  class SingleLink{
 //在对链表的任何操作，都不能修改链表头的引用变量$head的指向地址
   public $head;
   public $count;
  function __construct($head){
  //$head 为空节点，只有$next指向第一个数据节点
   $this->head =$head;
  }
  function addNode($node){
     //定义一个临时变量来遍历链表
   $cur = $this->head;
  //访问节点数据是通过当前节点的$next来获取下一个节点对象，从而访问该对象的数据
  //最后一个节点的$next为null,因此当$cur指向最后一个节点时，跳出循环，不会访问到
 // 该节点的数据，而该节点的数据是在$cur为上个节点时，已获取 
  while($cur->next!=null){
    //移动当前节点位置
     $cur =$cur->next;
   }
   //获取最后一个节点
    $cur->next=$node;
   $this->count+=1;
   } 
  function insertNode($node){
  //定义临时变量引用链表头
   $cur = $this->head;
  $flag =false;//学号不能重复
  while($cur->next!=null){
  //使用节点$next来访问下一个节点数据
   $stu =$cur->next->data;
    if($stu->stu_no> $node->data->stu_no){
     break;
    } elseif($stu->stu_no == $node->data->stu_no){
      $flag=true;
       break;
    }
  //移动当前节点位置
    $cur =$cur->next;
  }
   //退出循环时，$cur指向的节点的数据小于$node数据，$cur->next指向的数据大于
   //$node数据，或$cur指向最后的节点
  if(!$flag){
   $node->next =$cur->next;
   $cur->next =$node;
   $this->count+=1;
  }else{
     echo "<font color='red'>学号不能重复".$node->data->stu_no."<br/>";
   }
   }
  function iterateNodes(){
  //定义临时变量引用链表头
   $cur =$this->head;
   echo "共有".$this->count."个学生:<br/>";
    while($cur->next !=null){
   //使用$next来访问下一个节点数据
     echo $cur->next->data;
   //移动当前节点位置
     $cur= $cur->next;
    }
  }
  function updateNode($node){
  //定义临时变量引用链表头
    $cur =$this->head;
    $flag =false;
    while($cur->next !=null){
      if($cur->next->data->stu_no == $node->data->stu_no){
        $flag= true;   
       break;
       }
   $cur =$cur->next;
    }
   if($flag){
    $node->next =$cur->next->next;
    $cur->next=$node;
    } else{
     echo "没有找到要修改的学生：".$node->data->stu_no."<br/>";
   }
   }
  function deleteNode($id){
   //定义临时变量引用链表头
   $cur=$this->head;
   $flag =false;
  while($cur->next !=null){
     if($cur->next->data->stu_no == $id){
       $flag = true;
     break;
     }
   //移动当前节点位置
   $cur=$cur->next;
   }
  if($flag){
   $cur->next =$cur->next->next;
 
  //当删除的是最后一个节点时，以下语句会报错
   //$cur->next->next=null;
  } else{
   echo "没有找到要删除的学生：".$id."<br/>";
   }
   }
  }

  //应用
  //创建链表头
   $head = new LinkNode();
   $single_link = new SingleLink($head);
   $stu = new Student(1,'sofar',32,'male');
   $node = new LinkNode($stu) ; 
    $single_link->addNode($node);
   $stu = new Student(2,'sofarther',31,'female');
   $node = new LinkNode($stu);
   $single_link->addNode($node);
   $stu = new Student(5,'zhss',23,'male');
    $node = new LinkNode($stu);
   $single_link->addNode($node);
   $stu= new Student(3,'zss',25,'male');
   $single_link->insertNode(new LinkNode($stu));

  $single_link->iterateNodes();
   $stu =new Student(2,'tt',33,'male');
   $single_link->updateNode(new LinkNode($stu));
  $stu  = new Student(5,'aaa',32,'female');
   $single_link->updateNode(new LinkNode($stu));
  echo "<br/>修改后的信息：<br/>";
  $single_link->iterateNodes();

  $single_link->deleteNode(4);
 $single_link->deleteNode(5);
  $single_link->deleteNode(2);

 echo "<br/>删除后信息：<br/>";
  $single_link->iterateNodes();
  ?>
</body>
</html>

