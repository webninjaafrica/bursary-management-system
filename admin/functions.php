<?php
include_once("autoload.php");


function setAprovalStatus($bursary_id,$amount="0",$status="Awarded"){
	$q="update bursary set application_status=:status, amount_awarded=:amount_awarded where bursary_id=:bursary_id";
	$con_init=DB::connect();
	$stmt=$con_init->prepare($q);
	$stmt->bindParam(":status",$status);
	$stmt->bindParam(":bursary_id",$bursary_id);
	$stmt->bindParam(":amount_awarded",$amount);
	$stmt->execute();
	$stmt=null;
	return "<div class='alert alert-success'><h3>Bursary was ".$status."!</h3></div>";
}

function viewApplication($student){
if (isset($_GET['reject'])) {
	echo setAprovalStatus($_GET['reject'],"0","Rejected");
}

if (isset($_GET['amount']) && isset($_GET['approve'])) {
	echo setAprovalStatus($_GET['approve'],$_GET['amount'],"Awarded");
}
$st0=bursary::search_marched_bursary("bursary_id",$student);
$st=$st0[0];
 ?>
 <div class="row">
 	<div class="col-sm-6 col-md-6 col-xs-12 col-lg-6"> <h2>VIEW APLLICATION / BURSARY</h2><hr><p>
	<table class="table table-bordered table-stripped" style="width:92%;">
		<?php foreach ($st as $key => $value) { ?>
			<tr>
				<td style="background: black; color: yellow;"><?php echo $key; ?></td> <td><?php 
				if ($key=="file_attachment" || $key=="photo") { ?>
					<img src="../<?php echo $value; ?>" style="width: 128px;">
				<?php }else{
				echo $value; } ?></td><td></td><td></td><td></td>
			</tr>
		<?php } ?>
		<tr>
			
			</td>

			<td>
				
			</td>
			<td></td><td></td><td></td>
			
		</tr>
	</table>
	</div>
 	<div class="col-sm-6 col-md-6 col-xs-12 col-lg-6">
 		<a href="?reject=<?php echo $student; ?>&id=<?php echo $student; ?>" class="btn btn-danger"><i class="fa fa-ban"></i> REJECT APPLICATION </a>
 		<hr><p>
 			<h4>Approve/Award</h4><hr>
 			<form method="GET">
				<input type="hidden" name="approve" value="<?php echo $st['bursary_id']; ?>">
				<input type="hidden" name="id" value="<?php echo $st['bursary_id']; ?>">
				Amount to Award: <input type="number" name="amount" value="0" required><button type="submit" class="btn btn-info"><i class="fa fa-check"></i> AWARD BURSARY</button></form>
 	</div>
 </div>

<?php } ?>

<?php
function displayDashboard($type,$text,$icon){
	$html="";


	return $html;
}
?>