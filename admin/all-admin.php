<?php

include_once('head.php'); 
 
  ?><?php

 include_once('autoload.php');
 
 
  ?>
 <div class='row' id='row' style='margin-top:24px;padding:4px;'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><ul class='breadcrumb'><li class='breadcrumb-item'><a href='all-admin.php'><i class='fa fa-list'></i>&nbsp;&nbsp;All ADMIN</a></li> </ul>
 
  </div>

 
  </div>
 <style>#row{margin-top:24px;}</style>
 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'>
 <div class='btn-group'><a href='add-admin.php' class='btn btn-info'><i class='fa fa-plus'></i> ADD NEW</a><a class='btn btn-primary' href='all-admin.php' class='btn btn-default'><i class='fa fa-refresh'></i> admin List</a>
 
  </div>

 
  </div></div>

 <div class='row' id='searchbar'><div class='col-sm-6 col-md-6 col-xs-12 col-lg-6'><form class='form-inline'><i class='fa fa-calendar'> Search Between Dates: </i>
 <input type='date' name='date1' class='form-control' required='required'><input type='date' name='date2' class='form-control' required='required'><button type='submit' class='btn btn-default'>&nbsp;<i class='fa fa-search'></i>&nbsp;&nbsp;SEARCH</button>
 

</form>
 
  </div>
<div class='col-sm-6 col-md-6 col-xs-12 col-lg-6'>
 <form class='form-inline'>
 <select name='type' class='form-control select' required='required'><option value='name'>NAME</option><option value='username'>USERNAME</option><option value='password'>PASSWORD</option></select><input type='text' name='query' class='form-control' required='required'><button style='margin-left:4px;border:1px solid lightgrey;' name='check' type='submit' class='btn btn-info'><i class='fa fa-search'></i> SEARCH</button>
 
</form>
 
  </div>

 
  </div>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'>
<?php

 if(isset($_GET['id'])){ $r=new admin($_GET['id']); 
 $r->delete_admin();
 echo '<script>alert("ITEM WAS DELETED!"); window.location.href="all-admin.php";</script>
';  } 
 $alldata=admin::read_admin(); $column=admin::admin_constants(); 
 if(isset($_GET['check']) && isset($_GET['type']) && isset($_GET['query'])){ 
 if(in_array($_GET['type'],$column)){ 
 $alldata=admin::search_admin($_GET['type'],$_GET['query']); }
 else{
 $alldata=admin::read_admin();
} 
 if(isset($_GET['date1']) && isset($_GET['date2'])){
 extract($_GET); 
  $alldata= admin::check_between_dates_admin($date1,$date2); 
 } 
 } 
  ?>
<center><b><?php

 echo count($alldata); 
 
  ?> Records Found. <?php

 if(isset($_GET['type']) && isset($_GET['query'])){ echo 'search results for: '.$_GET['type'].' / '.$_GET['query']; }
 
  ?></b></center><p><hr><p>
 <div class='table-responsive'>

<table style='width:100%;' border='1' cellpadding='2' class='table table-striped table-hover table-bordered table-condensed' id='table'>
 <thead>
<tr><th class='name'>NAME</th><th class='username'>USERNAME</th><th class='password'>PASSWORD</th><td class='Edit'><i class='fa fa-edit'></i> Update</td><td class='Delete'><i class='fa fa-trash'></i> Delete</td></tr>
</thead><tbody>
 <?php

 
 for($i=0; $i<count($alldata); $i++){ 
 $raw=$alldata[$i]; 
 
  ?><tr><td class='name'><?php

 echo $raw['name']; 
 
  ?></td><td class='username'><?php

 echo $raw['username']; 
 
  ?></td><td class='password'><?php

 echo $raw['password']; 
 
  ?></td><td class='Edit'><a href='add-admin.php?id=<?php

 echo $raw['admin_id']; 
 
  ?>' class='btn btn-success'><i class='fa fa-edit'></i> EDIT</a></td><td class='Delete'><a href='all-admin.php?id=<?php

 echo $raw['admin_id']; 
 
  ?>' class='btn btn-danger'><i class='fa fa-trash'></i> TRASH</a></td> </tr><?php

 } 
 
  ?>
</tbody></table>
  </div>

 
  </div>

 
  </div>
<?php

 include_once('foot.php'); 
 
   ?>