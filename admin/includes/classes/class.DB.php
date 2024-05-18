<?php
 

 class DB{
 static function connect(){
 $host='localhost';

 $dbuser='root';

 $dbpass='';

 $dbname='bursary_op';

 try{
$con=new PDO('mysql:host='.$host.';dbname='.$dbname,$dbuser,$dbpass); 
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 

 return $con;

 } catch(PDOException $e){ die('Oops! database error: '.$e); } 
} 
 } 
 
  ?>