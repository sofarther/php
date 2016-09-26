<html>
  <head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
  </head>
  <body>
  <?php
    class LinkNode{
     public $num;
     public $next;

     function __construct($num=0,$next=null){
      $this->num =$num;
      $this->next=$next;
     }
     }
    $count=7;
    $n=5;
    $head = new LinkNode();
    $last = $head;
    for($i=1; $i<=$count;$i++){
      $node = new LinkNode($i);
     $last->next =$node;
     $last=$node;
   //构建环形链表时，每个新节点的$next指向第一个节点
   // if($i==$count){
     $node->next =$head->next;
    //}
     }
   $cur =$head;
   $c=1;
   while($count>1){
    //循环开始时，当前栈引用为当前节点的堆引用所在的节点，而判断的是当前节点，而不是当前栈节点，当前节点是通过当前栈节点的$next属性，即堆引用来访问的
     if(($c++)==$n){
      $cur->next = $cur->next->next;
    //此时当前栈节点的$next属性为当前节点的堆引用，所以要重新开始新的循环
    //而不再执行 $cur=$cur->next,这样才满足最开始的循环状态
      $count--;
      $c=1;
      continue;
     }
   $cur=$cur->next;
   }
  echo "Winner: ".$cur->num;
  ?>
  </body>
</html>
