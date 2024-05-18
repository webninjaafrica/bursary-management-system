<?php
date_default_timezone_set('Africa/Nairobi');
 include_once('autoload.php'); 

 class bursary{

  
 var $primary_key; 
 function __construct($bursary_id=''){ 
 $this->primary_key=$bursary_id;
}

public function create_bursary($name,$phone,$gender,$address,$file_attachment,$photo,$school,$admission_no,$ward,$year,$term,$disability,$orphaned,$reason,$username,$password,$amount_awarded="",$application_status="",$show_error='NO'){
$q='insert into bursary(name,phone,gender,address,file_attachment,photo,school,admission_no,ward,year,term,disability,orphaned,reason,username,password,date_of_appication,amount_awarded,application_status) values(:name,:phone,:gender,:address,:file_attachment,:photo,:school,:admission_no,:ward,:year,:term,:disability,:orphaned,:reason,:username,:password,:date_of_appication,:amount_awarded,:application_status)';
$date_of_appication=date('Y-m-d');
$con_init=DB::connect();
$stmt=$con_init->prepare($q);
$stmt->bindParam(':name',$name);
$stmt->bindParam(':phone',$phone);
$stmt->bindParam(':gender',$gender);
$stmt->bindParam(':address',$address);
$stmt->bindParam(':file_attachment',$file_attachment);
$stmt->bindParam(':photo',$photo);
$stmt->bindParam(':school',$school);
$stmt->bindParam(':admission_no',$admission_no);
$stmt->bindParam(':ward',$ward);
$stmt->bindParam(':year',$year);
$stmt->bindParam(':term',$term);
$stmt->bindParam(':disability',$disability);
$stmt->bindParam(':orphaned',$orphaned);
$stmt->bindParam(':reason',$reason);
$stmt->bindParam(':username',$username);
$stmt->bindParam(':password',$password);
$stmt->bindParam(':date_of_appication',$date_of_appication);
$stmt->bindParam(':amount_awarded',$amount_awarded);
$stmt->bindParam(':application_status',$application_status);
$stmt->execute();
 $stmt=null;
if($show_error=='YES'){
 return 'Success Data saved.'; 
}else{
 return $con_init->lastInsertId();
 }
 }
 
 
static function read_bursary($start='0',$limit='1000'){
$q='select * from bursary limit'.' '.$start.','.$limit;
$data=array();
$stmt=DB::connect()->prepare($q);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){


 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function bursary_constants(){$const=array('bursary_id','name','phone','gender','address','file_attachment','photo','school','admission_no','ward','year','term','disability','orphaned','reason','username','password','date_of_appication','amount_awarded','application_status');

 return $const;
}
 
 
public function update_bursary($name,$phone,$gender,$address,$file_attachment,$photo,$school,$admission_no,$ward,$year,$term,$disability,$orphaned,$reason,$username,$password,$date_of_appication,$amount_awarded,$application_status){
 
$q='update bursary set name=:name,phone=:phone,gender=:gender,address=:address,file_attachment=:file_attachment,photo=:photo,school=:school,admission_no=:admission_no,ward=:ward,year=:year,term=:term,disability=:disability,orphaned=:orphaned,reason=:reason,username=:username,password=:password,date_of_appication=:date_of_appication,amount_awarded=:amount_awarded,application_status=:application_status where bursary_id=:9140_';

$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':name',$name);
$stmt->bindParam(':phone',$phone);
$stmt->bindParam(':gender',$gender);
$stmt->bindParam(':address',$address);
$stmt->bindParam(':file_attachment',$file_attachment);
$stmt->bindParam(':photo',$photo);
$stmt->bindParam(':school',$school);
$stmt->bindParam(':admission_no',$admission_no);
$stmt->bindParam(':ward',$ward);
$stmt->bindParam(':year',$year);
$stmt->bindParam(':term',$term);
$stmt->bindParam(':disability',$disability);
$stmt->bindParam(':orphaned',$orphaned);
$stmt->bindParam(':reason',$reason);
$stmt->bindParam(':username',$username);
$stmt->bindParam(':password',$password);
$stmt->bindParam(':date_of_appication',$date_of_appication);
$stmt->bindParam(':amount_awarded',$amount_awarded);
$stmt->bindParam(':application_status',$application_status);
$stmt->bindParam(':9140_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


public function delete_bursary(){
$q='delete from bursary where bursary_id=:9140_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':9140_',$this->primary_key);
$stmt->execute();
 $stmt=''; 
 return 'success'; }


static function search_bursary($col,$value,$start='0',$limit='1000'){
$q='select * from bursary where '.$col.' like :col limit'.' '.$start.','.$limit;
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
 
 
static function search_marched_bursary($col,$value,$start='0',$limit='1000'){
$q='select * from bursary where '.$col.'=:col limit'.' '.$start.','.$limit; 
 $data=array();
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':col',$value);
$stmt->execute();

 while($s=$stmt->fetch(PDO::FETCH_ASSOC)){
 array_push($data,$s); }
 $stmt=''; 
 return $data;
}
 
 
static function get_bursary($id){
$q='select * from bursary where bursary_id=:9140_';
$stmt=DB::connect()->prepare($q);
$stmt->bindParam(':9140_',$id);
$stmt->execute();

  $data=$stmt->fetch(PDO::FETCH_ASSOC);
 $stmt=''; 
 return $data;
}
 
 static function login_bursary($username,$password){ 
$q='select * from bursary where username=:username and password=:password';
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