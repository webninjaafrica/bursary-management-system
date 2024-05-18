<?php

include_once('head.php'); 
 
  ?><?php

 include_once('autoload.php');
 
 
  ?>
 <div class='row' id='row' style='margin-top:24px;padding:4px;'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><ul class='breadcrumb'><li class='breadcrumb-item'><a href='all-bursary.php'><i class='fa fa-list'></i>&nbsp;&nbsp;All BURSARY</a></li> </ul>
 
  </div>

 
  </div>
 <style>#row{margin-top:24px;}</style>
 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'>
 <div class='btn-group'><a href='add-bursary.php' class='btn btn-info'><i class='fa fa-plus'></i> ADD NEW</a><a class='btn btn-primary' href='all-bursary.php' class='btn btn-default'><i class='fa fa-refresh'></i> bursary List</a>
 
  </div>

 
  </div></div>

 <div class='row' id='searchbar'><div class='col-sm-6 col-md-6 col-xs-12 col-lg-6'><form class='form-inline'><i class='fa fa-calendar'> Search Between Dates: </i>
 <input type='date' name='date1' class='form-control' required='required'><input type='date' name='date2' class='form-control' required='required'><button type='submit' class='btn btn-default'>&nbsp;<i class='fa fa-search'></i>&nbsp;&nbsp;SEARCH</button>
 

</form>
 
  </div>
<div class='col-sm-6 col-md-6 col-xs-12 col-lg-6'>
 <form class='form-inline'>
 <select name='type' class='form-control select' required='required'><option value='name'>NAME</option><option value='phone'>PHONE</option><option value='gender'>GENDER</option><option value='address'>ADDRESS</option><option value='file_attachment'>FILE ATTACHMENT</option><option value='photo'>PHOTO</option><option value='school'>SCHOOL</option><option value='admission_no'>ADMISSION NO</option><option value='ward'>WARD</option><option value='year'>YEAR</option><option value='term'>TERM</option><option value='disability'>DISABILITY</option><option value='orphaned'>ORPHANED</option><option value='reason'>REASON</option><option value='username'>USERNAME</option><option value='password'>PASSWORD</option><option value='date_of_appication'>DATE OF APPICATION</option><option value='amount_awarded'>AMOUNT AWARDED</option><option value='application_status'>APPLICATION STATUS</option></select><input type='text' name='query' class='form-control' required='required'><button style='margin-left:4px;border:1px solid lightgrey;' name='check' type='submit' class='btn btn-info'><i class='fa fa-search'></i> SEARCH</button>
 
</form>
 
  </div>

 
  </div>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'>
<?php

 if(isset($_GET['id'])){ $r=new bursary($_GET['id']); 
 $r->delete_bursary();
 echo '<script>alert("ITEM WAS DELETED!"); window.location.href="all-bursary.php";</script>
';  } 
 $alldata=bursary::read_bursary(); $column=bursary::bursary_constants(); 
 if(isset($_GET['check']) && isset($_GET['type']) && isset($_GET['query'])){ 
 if(in_array($_GET['type'],$column)){ 
 $alldata=bursary::search_bursary($_GET['type'],$_GET['query']); }
 else{
 $alldata=bursary::read_bursary();
} 
 if(isset($_GET['date1']) && isset($_GET['date2'])){
 extract($_GET); 
  $alldata= bursary::check_between_dates_bursary($date1,$date2); 
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
<tr><th class='name'>NAME</th><th class='phone'>PHONE</th><th class='gender'>GENDER</th><th class='address'>ADDRESS</th><th class='file_attachment'>FILE ATTACHMENT</th><th class='photo'>PHOTO</th><th class='school'>SCHOOL</th><th class='admission_no'>ADMISSION NO</th><th class='ward'>WARD</th><th class='year'>YEAR</th><th class='term'>TERM</th><th class='disability'>DISABILITY</th><th class='orphaned'>ORPHANED</th><th class='reason'>REASON</th><th class='username'>USERNAME</th><th class='password'>PASSWORD</th><th class='date_of_appication'>DATE OF APPICATION</th><th class='amount_awarded'>AMOUNT AWARDED</th><th class='application_status'>APPLICATION STATUS</th><td class='Edit'><i class='fa fa-edit'></i> Update</td><td class='Delete'><i class='fa fa-trash'></i> Delete</td></tr>
</thead><tbody>
 <?php

 
 for($i=0; $i<count($alldata); $i++){ 
 $raw=$alldata[$i]; 
 
  ?><tr><td class='name'><?php

 echo $raw['name']; 
 
  ?>
    <a href="view-application.php?id=<?php echo $raw['bursary_id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-eye"></i> VIEW DETAILS </a>

  </td><td class='phone'><?php

 echo $raw['phone']; 
 
  ?></td><td class='gender'><?php

 echo $raw['gender']; 
 
  ?></td><td class='address'><?php

 echo $raw['address']; 
 
  ?></td><td class='file_attachment'>
    <img src="../<?php

 echo $raw['file_attachment']; 
 
  ?>" style="width: 124px;"></td><td class='photo'> <img src="../<?php

 echo $raw['photo']; 
 
  ?>" style="width: 124px;"></td><td class='school'><?php

 echo $raw['school']; 
 
  ?></td><td class='admission_no'><?php

 echo $raw['admission_no']; 
 
  ?></td><td class='ward'><?php

 echo $raw['ward']; 
 
  ?></td><td class='year'><?php

 echo $raw['year']; 
 
  ?></td><td class='term'><?php

 echo $raw['term']; 
 
  ?></td><td class='disability'><?php

 echo $raw['disability']; 
 
  ?></td><td class='orphaned'><?php

 echo $raw['orphaned']; 
 
  ?></td><td class='reason'><?php

 echo $raw['reason']; 
 
  ?></td><td class='username'><?php

 echo $raw['username']; 
 
  ?></td><td class='password'><?php

 echo $raw['password']; 
 
  ?></td><td class='date_of_appication'><?php

 echo $raw['date_of_appication']; 
 
  ?></td><td class='amount_awarded'><?php

 echo $raw['amount_awarded']; 
 
  ?></td><td class='application_status'><?php

 echo $raw['application_status']; 
 
  ?></td><td class='Edit'><a href='add-bursary.php?id=<?php

 echo $raw['bursary_id']; 
 
  ?>' class='btn btn-success'><i class='fa fa-edit'></i> EDIT</a></td><td class='Delete'><a href='all-bursary.php?id=<?php

 echo $raw['bursary_id']; 
 
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