<?php
 require_once "smarty_conf.inc.php";
//局部缓存，显示访问次数：需要一个文件保存当前次数
  function insert_times(){
  if(!file_exists("counter.txt")){
      file_put_contents("counter.txt","0");
   }
$times =intval(file_get_contents("counter.txt"))+1;
  file_put_contents("counter.txt",$times);
   return $times;
}
//后过滤器：在编译完模板文件后调用该函数，然后将函数的返回值写入到生成的PHP文件
function assign_param($tplsource,&$smarty){
//编译过程是将模板中变量语句替换生成PHP文件，不包含变量的分配
//只有当执行和解析PHP文件时，才会检查变量是否分配，若变量未分配则会报错
//变量分配过程一般在编译前进行分配，变量的分配值改变，不会影响或重新编译模板文件
//只有当模板文件修改时，才会重新编译模板文件，若模板未改变，将不会执行编译模板过程，也不会触发
//前过滤器和后过滤器，因此在后过滤器中分配变量，此时该变量将不会被分配
   //$smarty->assign("like",array("peach","apple"));
   return "<?php echo \"<!--Create by sofar-->\n\" ?>\n".$tplsource;
 }
//向html_checkboxes中传入参数

  $hobbys=array('book'=>"读书",'computer'=>"电脑","ball"=>"球", "music"=>"音乐","movie"=>"电影");
  $sel=array("book","music","movie");
  $values=array("apple","banana","peach");
  $output=array("苹果","香蕉","桃");
  $like=array("peach","apple");
  $tpl->assign("hobbys",$hobbys);
  $tpl->assign("sel",$sel);
  $tpl->assign("value",$values);
  $tpl->assign("output",$output);
  $tpl->assign("like",$like);
  $tpl->assign("checked","ball");
  $tpl->assign("myname","zhss");
//后过滤器：在编译完模板文件后调用该函数，然后将函数的返回值写入到生成的PHP文件
  // $tpl->registerFilter("post","assign_param");
//输出滤镜：在执行完生成的PHP文件后调用，即调用的函数的传入的第一个参数是生成的HTML代码，因此不能进行变量分配
  //$tpl->registerFilter("output","assign_param");
  $times =insert_times();
  $tpl->assign("times",$times);
  $tpl->display("build_in.tpl");
?>
