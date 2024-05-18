<?php

 include_once('autoload.php'); 

 class page{

  
 var $primary_key; 
 function __construct($page_id=''){ 
 $this->primary_key=$page_id;
}

public function create_page($title,$content,$date,$show_error='NO'){
$q='insert into page(title,content,date) values(:title,:content,:date)';

$con_init=DB::connect();
$stmt=$con_init->prepare($q);
$stmt->bindParam(':title',$title);
$stmt->bindParam(':content',$content);
$stmt->bindParam(':date',$date);
$stmt->execute();
 $stmt=null;
if($show_error=='YES'){
 return 'Success Data saved.'; 
}else{
 return $con_init->lastInsertId();
 }
 }
 
 
static function read_page($start='0',$limit='1000'){
$q='select * from page limit'.' '.$start.','.$limit;
$data=array();
$stmt=DB::connect()->prepare($q);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){


 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function page_constants(){$const=array('page_id','title','content','date');

 return $const;
}
 
 
public function update_page($title,$content,$date){
 
$q='update page set title=:title,content=:content,date=:date where page_id=:9140_';

$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':title',$title);
$stmt->bindParam(':content',$content);
$stmt->bindParam(':date',$date);
$stmt->bindParam(':9140_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


public function delete_page(){
$q='delete from page where page_id=:9140_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':9140_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


static function search_page($col,$value,$start='0',$limit='1000'){
$q='select * from page where '.$col.' like :col limit'.' '.$start.','.$limit;
 $value='%'.$value.'%'; 
 $data=array();
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':col',$value);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){
 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function search_marched_page($col,$value,$start='0',$limit='1000'){
$q='select * from page where '.$col.'=:col limit'.' '.$start.','.$limit; 
 $data=array();
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':col',$value);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){
 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function get_page($id){
$q='select * from page where page_id=:9140_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':9140_',$id);
$stmt->execute();

  $data=$stmt->fetch(PDO::FETCH_ASSOC);
 $stmt=''; 
 return $data;
}
 

 } 
 
  ?>