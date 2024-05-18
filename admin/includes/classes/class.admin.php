<?php

 include_once('autoload.php'); 

 class admin{

  
 var $primary_key; 
 function __construct($admin_id=''){ 
 $this->primary_key=$admin_id;
}

public function create_admin($name,$username,$password,$show_error='NO'){
$q='insert into admin(name,username,password) values(:name,:username,:password)';

$con_init=DB::connect();
$stmt=$con_init->prepare($q);
$stmt->bindParam(':name',$name);
$stmt->bindParam(':username',$username);
$stmt->bindParam(':password',$password);
$stmt->execute();
 $stmt=null;
if($show_error=='YES'){
 return 'Success Data saved.'; 
}else{
 return $con_init->lastInsertId();
 }
 }
 
 
static function read_admin($start='0',$limit='1000'){
$q='select * from admin limit'.' '.$start.','.$limit;
$data=array();
$stmt=DB::connect()->prepare($q);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){


 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function admin_constants(){$const=array('admin_id','name','username','password');

 return $const;
}
 
 
public function update_admin($name,$username,$password){
 
$q='update admin set name=:name,username=:username,password=:password where admin_id=:9140_';

$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':name',$name);
$stmt->bindParam(':username',$username);
$stmt->bindParam(':password',$password);
$stmt->bindParam(':9140_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


public function delete_admin(){
$q='delete from admin where admin_id=:9140_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':9140_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


static function search_admin($col,$value,$start='0',$limit='1000'){
$q='select * from admin where '.$col.' like :col limit'.' '.$start.','.$limit;
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
 
 
static function search_marched_admin($col,$value,$start='0',$limit='1000'){
$q='select * from admin where '.$col.'=:col limit'.' '.$start.','.$limit; 
 $data=array();
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':col',$value);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){
 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function get_admin($id){
$q='select * from admin where admin_id=:9140_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':9140_',$id);
$stmt->execute();

  $data=$stmt->fetch(PDO::FETCH_ASSOC);
 $stmt=''; 
 return $data;
}
 
 static function login_admin($username,$password){ 
$q='select * from admin where username=:username and password=:password';
 $data=array();

 $stmt=DB::connect()->prepare($q); 
$stmt->bindParam(':username',$username); 
$stmt->bindParam(':password',$password); 

 $stmt->execute(); 
 $data['rows']=$stmt->fetch(PDO::FETCH_ASSOC); 
 $data['row_count']=$stmt->rowCount(); 
 return $data; 
 } 
 

 } 
 
  ?>