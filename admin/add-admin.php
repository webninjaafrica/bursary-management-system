<?php

include_once('head.php'); 
 
  ?><?php

 include_once('autoload.php');
 
 
  ?>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><ul class='breadcrumb'><li class='breadcrumb-item'><a href='all-admin.php'><i class='fa fa-list'></i>&nbsp;&nbsp;ADMIN Records</a></li> <li  class='breadcrumb-item'><a href='#'><i class='fa fa-list'></i>&nbsp;&nbsp;New&nbsp;admin</a></li> </ul>
 
  </div>

 
  </div>
<?php

 
$name=$username=$password='';

 if(isset($_GET['id'])){ 
 $id=$_GET['id'];
$data=admin::get_admin($id); 
 extract($data); 
 } 
 
 
 
  ?>
 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><?php

 
 if(isset($_POST['save']) && $_SERVER['REQUEST_METHOD']=='POST'){
 extract($_POST);

 
  ?> 
 <div class='alert alert-info'><?php

 
 if(isset($_GET['id'])){ $ss=new admin($_GET['id']);
echo $ss->update_admin($name,$username,$password);


 echo '<script>swal({
  title: "Success!",
  text: "Info Updated!",
  icon: "success",
  button: "Close",
})</script>'; 
 
                      }
 else{ 

$ss=new admin(); echo $ss->create_admin($name,$username,$password,'YES'); 


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
 <div class='panel-heading'><h3><i class='fa fa-info-circle'></i>&nbsp;&nbsp;&nbsp; ADMIN/ info</h3>
 
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