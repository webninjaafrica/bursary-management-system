<?php
$page="404 Not Found";
include_once("head.php");
include_once("autoload.php");
$content="Nothing Here!";
if (isset($_GET['page'])) {
	$page=$_GET['page'];
	$page=str_ireplace("-", " ", $page);
	$data=page::search_marched_page("title",$page);
	if (count($data) >0) {
		$content=$data[0]['content'];
	}
}
 ?>

  <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-6.jpg)">
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
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->

    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-from mt-30">
                        <div class="section-title">
                        </div> <!-- section title -->
                        <div class="main-form pt-45">
                           <p>
                           	<?php echo $content; ?>
                           </p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once("foot.php"); ?>