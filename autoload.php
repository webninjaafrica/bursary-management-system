<?php



 spl_autoload_register(function($class){

 if(file_exists('admin/includes/class.'.$class.'.php')){ 

 include_once('admin/includes/class.'.$class.'.php'); 
 
 }  }); 
 
  spl_autoload_register(function($class){

 if(file_exists('admin/includes/classes/class.'.$class.'.php')){ 

 include_once('admin/includes/classes/class.'.$class.'.php'); 
 
 }  }); 
 
  ?>