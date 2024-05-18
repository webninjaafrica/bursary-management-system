<?php
date_default_timezone_set("Africa/Nairobi");
$date=date('Y-m-d');
include_once('head.php'); 
 
  ?><?php

 include_once('autoload.php');
 
 
  ?>

 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><ul class='breadcrumb'><li class='breadcrumb-item'><a href='all-page.php'><i class='fa fa-list'></i>&nbsp;&nbsp;PAGE Records</a></li> <li  class='breadcrumb-item'><a href='#'><i class='fa fa-list'></i>&nbsp;&nbsp;New&nbsp;page</a></li> </ul>
 
  </div>

 
  </div>
<?php

 
$title=$content=$date='';

 if(isset($_GET['id'])){ 
 $id=$_GET['id'];
$data=page::get_page($id); 
 extract($data); 
 } 
 
 
 
  ?>
 <div class='row' id='row'>
 <div class='col-sm-12 col-md-12 col-xs-12 col-lg-12'><?php

 
 if(isset($_POST['save']) && $_SERVER['REQUEST_METHOD']=='POST'){
 extract($_POST);

 
  ?> 
 <div class='alert alert-info'><?php

 
 if(isset($_GET['id'])){ $ss=new page($_GET['id']);
echo $ss->update_page($title,$content,$date);


 echo '<script>swal({
  title: "Success!",
  text: "Info Updated!",
  icon: "success",
  button: "Close",
})</script>'; 
 
                      }
 else{ 

$ss=new page(); echo $ss->create_page($title,$content,$date,'YES'); 


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
 <div class='panel-heading'><h3><i class='fa fa-info-circle'></i>&nbsp;&nbsp;&nbsp; PAGE/ info</h3>
 
  </div>

 <div class='panel-body'><div class='row' style='display:flex;flex-wrap:wrap;'>
 <div class='col-sm-4 col-md-4 col-lg-4 col-xs-12'><div class='row form-group'>
 <div class='col-12 col-sm-4'>TITLE
 
  </div>


 <div class='col-12 col-sm-8'><input type='text' name='title' class='form-control' placeholder='TITLE' value='<?php

 echo $title; 
 
  ?>' required='required'>
 
  </div>
 

 
  </div>
</div>

 <div class='col-12'><div class='row form-group'>

 <div class='col-12 col-sm-12'>
<b>CONTENT</b><p>
  <textarea name='content' cols="12" rows="25" class='form-control' placeholder='CONTENT' value='<?php

 echo $content; 
 
  ?>' required='required'>
 </textarea>
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