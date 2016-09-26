<html>
 <head>
  <http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
 <body>
   <?php
//默认下数组的参数传递是值传递
     function mysort($arr){
       sort($arr);
      
      print_r($arr);
     }
   //快速排序，处理大量的数据
  function quickSort2(&$arr,$leftIndex, $rightIndex){
   //指定一个用于比较的值  
  $provi = $arr[($leftIndex+$rightIndex)/2];
   $l =$leftIndex;
   $r =$rightIndex;
   while($l<$r){
    //分别查找左右两边不满足排序的条件的元素
    //不能添加等号，$provi用于避免数组中没有相应元素而循环出界
    while($arr[$l] <$provi) $l++;
    while($arr[$r] >$provi) $r--;
    /*
    跳出查找循环的结果有几种情况：
        $l所在的元素>=$provi, $r 所在的元素<=$provi
        当$arr[$l] >$provit $arr[$r]<$provi 时，可通过两者交换，使当前的两个元素都满足查找条件，
                       从而继续查找循环
       当有一个元素为==$provi时，交换后，另一个仍不满足查找循环条件，此时可以只查找该元素所在的循环
            并交替进行 
  */
   // 由于两侧的循环，在查找到相应元素后，需判断当前的元素是否已循环
   //当数组的元素中存在多个与$provi值相同的元素时，可能出现$l>$r的情况：$l=$r+1
   //一般情况，$l==$r,且对应的元素值为$provi,但不一定是中间元素的索引
    if($l >=$r)  break;

    $t = $arr[$l];
   $arr[$l] =$arr[$r];
   $arr[$r] =$t;
   
  if($arr[$l] == $provi) $r--;
  if($arr[$r] == $provi) $l++;
   
//也可以通过直接向下循环查找，这样当下一个为另一个循环的当前位置时，$l==$r,则会跳出循环
//但此时元素值不一定为$provi,因此需要添加对该条件的判断:将同一个元素进行两个递归时，可能造成错误，因此需保证元素的不重复,因此判断较为繁琐，因为此时的元素值可能大于等于小于$provi
 // if($arr[$l] == $provi) $l++;
  //if($arr[$r] == $provi) $r--;   
}
//当$l==$r时其元素左侧的所有元素都小于该元素，其右侧所有元素都大于该元素，只需对左右两侧的元素分别递归
 // 将同一个元素进行两个递归时，可能造成错误，因此需保证元素的不重复
if($l ==$r ) { $l++; $r--;}

   if($r>$leftIndex) quickSort2($arr,$leftIndex, $r);
   if($l<$rightIndex) quickSort2($arr,$l,$rightIndex);
  }
 
   function quickSort(&$arr,$leftIndex,$rightIndex){
     $midIndex = floor(($leftIndex + $rightIndex)/2);
     $povi = $arr[$midIndex];  
     
   $iIndex=$midIndex;
    for($i=$leftIndex; $i<$midIndex; $i++){
        if($arr[$i]>$povi){
        $t = $arr[$iIndex];
        $arr[$iIndex]=$arr[$i];
        $arr[$i] = $t;
       $iIndex =$i;  
       }
    }
   for($i=$midIndex +1; $i<=$rightIndex; $i++){
     if($arr[$i] < $povi){
      $t =$arr[$iIndex];
      $arr[$iIndex] = $arr[$i];
     $arr[$i] =$t;
     $iIndex =$i;
      }
        
   }
  if($rightIndex > $leftIndex){ quickSort($arr,$leftIndex, $iIndex);
                   quickSort($arr, $iIndex+1,$rightIndex);
       }
  }
 
   $arr = array(33,21,55,43,34,25,42);
    //echo "in function <br/>";
/*
   mysort($arr); //Array ( [0] => 21 [1] => 25 [2] => 33 [3] => 34 [4] => 42 [5] => 43 [6] => 55 ) 
   
   echo "<br>after sort array:<br>";
   print_r($arr); //Array ( [0] => 33 [1] => 21 [2] => 55 [3] => 43 [4] => 34 [5] => 25 [6] => 42 )
  */
/*
  $arr = array();
  for($i=0; $i<200000; $i++){
   $arr[$i]=rand(100,1000);
  }
*/
 echo "before sort time : ".date("Y-n-d G:i:s")."<br/>";
  quickSort2($arr,0,count($arr)-1);
 echo "after sort time : ".date("Y-n-d G:i:s");
  print_r($arr);
  
  ?>
</body>
</html>
