<?php

include_once('head.php'); 
 
  ?><?php

 include_once('autoload.php');
 
 
  ?>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><ul class='breadcrumb'><li class='breadcrumb-item'><a href='all-bursary.php'><i class='fa fa-list'></i>&nbsp;&nbsp;BURSARY Records</a></li> <li  class='breadcrumb-item'><a href='#'><i class='fa fa-list'></i>&nbsp;&nbsp;New&nbsp;bursary</a></li> </ul>
 
  </div>

 
  </div>
<?php

 
$name=$phone=$gender=$address=$file_attachment=$photo=$school=$admission_no=$ward=$year=$term=$disability=$orphaned=$reason=$username=$password=$date_of_appication=$amount_awarded=$application_status='';

 if(isset($_GET['id'])){ 
 $id=$_GET['id'];
$data=bursary::get_bursary($id); 
 extract($data); 
 } 
 
 
 
  ?>
 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><?php

 
 if(isset($_POST['save']) && $_SERVER['REQUEST_METHOD']=='POST'){
 extract($_POST);

                            
 $file_attachment_upload_status=uploads::upload('file_attachment');
 if(empty($upload_status['error'])){

                                $file_attachment=$file_attachment_upload_status['dest'];

                                 }else{
                                 
 $file_attachment='';

                                }
                                
 
                                
                            
 $photo_upload_status=uploads::upload('photo');
 if(empty($upload_status['error'])){

                                $photo=$photo_upload_status['dest'];

                                 }else{
                                 
 $photo='';

                                } 
                            

                                
 
  ?> 
 <div class='alert alert-info'><?php

 
 if(isset($_GET['id'])){ $ss=new bursary($_GET['id']);
echo $ss->update_bursary($name,$phone,$gender,$address,$file_attachment,$photo,$school,$admission_no,$ward,$year,$term,$disability,$orphaned,$reason,$username,$password,$date_of_appication,$amount_awarded,$application_status);

    
 echo '<script>swal({
      title: "Success!",
      text: "Info Updated!",
      icon: "success",
      button: "Close",
    })</script>'; 
 
                          }
 else{ 

    $ss=new bursary(); echo $ss->create_bursary($name,$phone,$gender,$address,$file_attachment,$photo,$school,$admission_no,$ward,$year,$term,$disability,$orphaned,$reason,$username,$password,$date_of_appication,$amount_awarded,$application_status,'YES'); 

    
 echo '<script>swal({
      title: "Success!",
      text: "Info Saved!",
      icon: "success",
      button: "Close",
    })</script>'; 
 
                          
  } 
 
  ?> 
 
  </div>
<?php

  
 } 
 
  ?><form class='form' method='POST' id='form' enctype='multipart/form-data'>
 <div class='panel panel-default'>
 <div class='panel-heading'><h3><i class='fa fa-info-circle'></i>&nbsp;&nbsp;&nbsp; BURSARY/ info</h3>
 
  </div>

 <div class='panel-body'><div class='row' style='display:flex;flex-wrap:wrap;'>
 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>NAME
 
  </div>


 <div class='col-12 col-sm-8'><input type='text' name='name' class='form-control' placeholder='NAME' value='<?php

 echo $name; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>PHONE
 
  </div>


 <div class='col-12 col-sm-8'><input type='text' name='phone' class='form-control' placeholder='PHONE' value='<?php

 echo $phone; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>GENDER
 
  </div>


 <div class='col-12 col-sm-8'><input type='text' name='gender' class='form-control' placeholder='GENDER' value='<?php

 echo $gender; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>ADDRESS
 
  </div>


 <div class='col-12 col-sm-8'><input type='text' name='address' class='form-control' placeholder='ADDRESS' value='<?php

 echo $address; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>FILE ATTACHMENT
 
  </div>


 <div class='col-12 col-sm-8'><input type='file' name='file_attachment' class='form-control'  required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>PHOTO
 
  </div>


 <div class='col-12 col-sm-8'><input type='file' name='photo' class='form-control' accept='image/*' required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>SCHOOL
 
  </div>


 <div class='col-12 col-sm-8'><input type='text' name='school' class='form-control' placeholder='SCHOOL' value='<?php

 echo $school; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>ADMISSION NO
 
  </div>


 <div class='col-12 col-sm-8'><input type='text' name='admission_no' class='form-control' placeholder='ADMISSION NO' value='<?php

 echo $admission_no; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>WARD
 
  </div>


 <div class='col-12 col-sm-8'><input type='text' name='ward' class='form-control' placeholder='WARD' value='<?php

 echo $ward; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>YEAR
 
  </div>


 <div class='col-12 col-sm-8'><input type='text' name='year' class='form-control' placeholder='YEAR' value='<?php

 echo $year; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>TERM
 
  </div>


 <div class='col-12 col-sm-8'><input type='text' name='term' class='form-control' placeholder='TERM' value='<?php

 echo $term; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>DISABILITY
 
  </div>


 <div class='col-12 col-sm-8'><input type='text' name='disability' class='form-control' placeholder='DISABILITY' value='<?php

 echo $disability; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>ORPHANED
 
  </div>


 <div class='col-12 col-sm-8'><input type='text' name='orphaned' class='form-control' placeholder='ORPHANED' value='<?php

 echo $orphaned; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>REASON
 
  </div>


 <div class='col-12 col-sm-8'><input type='text' name='reason' class='form-control' placeholder='REASON' value='<?php

 echo $reason; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>USERNAME
 
  </div>


 <div class='col-12 col-sm-8'><input type='text' name='username' class='form-control' placeholder='USERNAME' value='<?php

 echo $username; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>PASSWORD
 
  </div>


 <div class='col-12 col-sm-8'><input type='text' name='password' class='form-control' placeholder='PASSWORD' value='<?php

 echo $password; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>DATE OF APPICATION
 
  </div>


 <div class='col-12 col-sm-8'><input type='text' name='date_of_appication' class='form-control' placeholder='DATE OF APPICATION' value='<?php

 echo $date_of_appication; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>AMOUNT AWARDED
 
  </div>


 <div class='col-12 col-sm-8'><input type='text' name='amount_awarded' class='form-control' placeholder='AMOUNT AWARDED' value='<?php

 echo $amount_awarded; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>APPLICATION STATUS
 
  </div>


 <div class='col-12 col-sm-8'><input type='text' name='application_status' class='form-control' placeholder='APPLICATION STATUS' value='<?php

 echo $application_status; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>
</div>

 
  </div>
</div>

 <div class='panel-footer'><button type='submit' name='save' class='btn btn-primary'><i class='fa fa-save'></i> OKAY</button>
 
  </div>

 
  </div>
</form>
 
  </div>

 
  </div>
<?php

 include_once('foot.php'); 
 
  ?>