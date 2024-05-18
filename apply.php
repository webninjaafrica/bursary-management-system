<?php
$page="Apply Bursary";
$error="";
include_once("head.php");
include_once("autoload.php");
include_once("functions.php");
$name=$phone=$gender=$address=$school_id=$photo=$school=$admission_no=$ward=$year=$term=$disabled=$orphaned=$reason=$username=$password="";

if (isset($_POST['go'])) {
    extract($_POST);
    $bur=new bursary();
    $username=$phone;
    $password=$admission_no;
    if (move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/".basename($_FILES['photo']['name']))) {
        $photo="uploads/".basename($_FILES['photo']['name']);
    }

    if (move_uploaded_file($_FILES['school_id']['tmp_name'], "uploads/".basename($_FILES['school_id']['name']))) {
        $school_id="uploads/".basename($_FILES['school_id']['name']);
    }
    $bur->create_bursary($name,$phone,$gender,$address,$school_id,$photo,$school,$admission_no,$ward,$year,$term,$disabled,$orphaned,$reason,$username,$password);
    $error="<div class='alert alert-success'>Bursary application was submitted.</div> <style>
    #contact-form{ display:none; }</style>";

}
 ?>

  <!--====== PAGE BANNER PART START ======-->
    
  <!--  <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-6.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2><?php echo $page; ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $page; ?></li>
                            </ol>
                        </nav>
                    </div> 
                </div>
            </div> 
        </div>
    </section> -->
    
    <!--====== PAGE BANNER PART ENDS ======-->

     <!--====== CONTACT PART START ======-->
    
    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-from mt-30">
                        <div class="section-title">
                            <h5>Online Bursary Application</h5>
                            <h2>Fill Your Details to Apply</h2>
                        </div> <!-- section title -->
                        <div class="main-form pt-45" id="apply">
                            <?php echo $error; ?>
                            <form id="contact-form" action="" method="post" enctype="multipart/form-data" data-toggle="validator">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <b class="placeholder-text">Full Names</b><br>
                                            <input name="name" type="text" placeholder="Your name" data-error="Name is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>

                                     <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <b class="placeholder-text">Gender:</b><br>
                                            <label><input name="gender" type="radio" value="Male" required="required" checked> Male</label>  
                                             <label><input name="gender" type="radio" value="Female" required="required"> Female</label>

                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>

                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <b class="placeholder-text">Address</b><br>
                                            <input name="address" type="text" placeholder="Your Residence" data-error="Residence is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>

                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <b class="placeholder-text">Ward:</b><br>
                                            <input name="ward" type="text" placeholder="Ward Name" data-error="ward is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>

                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <b class="placeholder-text">Passport Photo</b><br>
                                            <input name="photo" type="file" data-error="attach your passport photo" required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>

                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <b class="placeholder-text">Your Phone No: </b><br>
                                            <input name="phone" type="phone" placeholder="Tel No." data-error="Valid phone number is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>

                                   

                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <b class="placeholder-text">School:</b><br>
                                            <input name="school" type="text" placeholder="School Name" data-error="School is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form --> 
                                    </div>

                                     <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <b class="placeholder-text">School ID Card</b><br>
                                            <input name="school_id" type="file" data-error="attach your school id card copy" required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>

                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <b class="placeholder-text">Admission No:</b><br>
                                            <input name="admission_no" type="text" placeholder="ADM NO." data-error="adm no is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form --> 
                                    </div>

                                     <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <b class="placeholder-text">Year</b><br>
                                            <select name="year" required="required">
                                                <option value="2024/2025">2024/2025</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>

                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <b class="placeholder-text">Term</b><br>
                                            <select name="term" required="required">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>

                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <b class="placeholder-text">Physical Disability</b><br>
                                            <select name="disabled" required="required">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>

                                     <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <b class="placeholder-text">Are You an Orphan?</b><br>
                                            <select name="orphaned" required="required">
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>

                                     <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <textarea name="reason" placeholder="Why Do you need a bursary?" data-error="Please,leave us a reason to give you the bursary." required="required"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    
                                    
                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="singel-form">
                                            <button type="submit" name="go" class="main-btn">Submit Application</button>
                                        </div> <!-- singel form -->
                                    </div> 
                                </div> <!-- row -->
                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
                <div class="col-lg-5">
                    <div class="contact-address mt-30">
                    
                    </div> <!-- contact address -->
                    <div class="map mt-30">
                        <div id="contact-map"></div>
                    </div> <!-- map -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== CONTACT PART ENDS ======-->
<?php include_once("foot.php"); ?>