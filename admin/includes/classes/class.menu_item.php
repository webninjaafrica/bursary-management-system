<?php
 class menu_item{ 
 var $menu_type, $menu; 
 function __construct($menu_type=''){
 $items=array(array('admin'=>array('create'=>'add-admin.php','create_name'=>'admin','create_icon'=>'fa fa-plus','create_permission'=>'allow user to create admin ','view'=>'all-admin.php','view_icon'=>'fa fa-list','view_name'=>'view-admin','view_permission'=>'allow user to view admin '));,array('bursary'=>array('create'=>'add-bursary.php','create_name'=>'bursary','create_icon'=>'fa fa-plus','create_permission'=>'allow user to create bursary ','view'=>'all-bursary.php','view_icon'=>'fa fa-list','view_name'=>'view-bursary','view_permission'=>'allow user to view bursary '));,array('page'=>array('create'=>'add-page.php','create_name'=>'page','create_icon'=>'fa fa-plus','create_permission'=>'allow user to create page ','view'=>'all-page.php','view_icon'=>'fa fa-list','view_name'=>'view-page','view_permission'=>'allow user to view page '));,
 $this->menu_type=$menu_type;
 $this->menu=$items;  
 
 } 
 static function getForDataEntry(){
 $menu=$items=array(array('admin'=>array('create'=>'add-admin.php','create_name'=>'admin','create_icon'=>'fa fa-plus','create_permission'=>'allow user to create admin ','view'=>'all-admin.php','view_icon'=>'fa fa-list','view_name'=>'view-admin','view_permission'=>'allow user to view admin '));,array('bursary'=>array('create'=>'add-bursary.php','create_name'=>'bursary','create_icon'=>'fa fa-plus','create_permission'=>'allow user to create bursary ','view'=>'all-bursary.php','view_icon'=>'fa fa-list','view_name'=>'view-bursary','view_permission'=>'allow user to view bursary '));,array('page'=>array('create'=>'add-page.php','create_name'=>'page','create_icon'=>'fa fa-plus','create_permission'=>'allow user to create page ','view'=>'all-page.php','view_icon'=>'fa fa-list','view_name'=>'view-page','view_permission'=>'allow user to view page ')););
 $menus=array(); 
for($i=0; $i<count($menu); $i++){
 $data=json_decode($menu[$i]);
 if($data['type']=='create'){ 
 array_push($data,$menus); 
} 
 }
 return $menus; }
  
 static function getForDataReports(){
 $menu=$items=array(array('admin'=>array('create'=>'add-admin.php','create_name'=>'admin','create_icon'=>'fa fa-plus','create_permission'=>'allow user to create admin ','view'=>'all-admin.php','view_icon'=>'fa fa-list','view_name'=>'view-admin','view_permission'=>'allow user to view admin '));,array('bursary'=>array('create'=>'add-bursary.php','create_name'=>'bursary','create_icon'=>'fa fa-plus','create_permission'=>'allow user to create bursary ','view'=>'all-bursary.php','view_icon'=>'fa fa-list','view_name'=>'view-bursary','view_permission'=>'allow user to view bursary '));,array('page'=>array('create'=>'add-page.php','create_name'=>'page','create_icon'=>'fa fa-plus','create_permission'=>'allow user to create page ','view'=>'all-page.php','view_icon'=>'fa fa-list','view_name'=>'view-page','view_permission'=>'allow user to view page ')););
 $menus=array(); 

 return $menu; }
 
 } 
 ?>