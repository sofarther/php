<?php
  class StuModel extends MyDB{
    private $result;
function getRowCount(){
  $res=$this->mysqli->query('select * from student');
if($res){
  return $res->num_rows;
} else return 0;
}
 function getResult($start,$len){
   $this->result=$this->mysqli->query("select stu_id ,stu_name,math,english,history from student order by stu_id limit $start,$len");
  // $this->printResult();
}
 function printResult(){
  if($this->result){
   $field = $this->result->fetch_field();
    echo '<table width="500px" align="center" border="0px" cellspacing="0px"> ';
    echo  '<caption><h3>'.$field->table.'</h3></caption>';
    echo '<tr bgcolor="#cccccc">';
    do{
   echo '<th>'.$field->name.'</th>';
} while($field=$this->result->fetch_field());
$num=1;
while($row=$this->result->fetch_assoc()){
   if(($num++%2)==0) $bgcolor="#cccccc";
   else $bgcolor ="#ffffff"; 
  echo '<tr bgcolor="'.$bgcolor.'">';
 foreach($row as $col => $val){
   if($col =="stu_id") {
    echo '<td>'.$num.'</td>';
}else{
  echo '<td>'.$val.'</td>';
}
}
echo "</tr>";
}
echo '</table>';
}
}
 function getCaption(){
   if($this->result){
     $field = $this->result->fetch_field_direct(0);
     return $field->table;
}
}
 function getFields(){
  if($this->result){
     while($field = $this->result->fetch_field()){
        $names[]=$field->name;
}
 return $names;
}
}
function getRows(){
  if($this->result){
   while($row = $this->result->fetch_row()){
  $rows[]=$row;
}
  return $rows;
}
}
}
?>
