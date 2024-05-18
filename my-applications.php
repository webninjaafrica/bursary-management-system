<?php include_once("head.php"); 
include_once("functions.php");
include_once("autoload.php"); 
$student="";
if (isset($_SESSION['student'])) {
	$student=$_SESSION['student'];

}
$current=bursary::search_marched_bursary("username",$_SESSION['student']);
?>
<div style="margin-top: 34px;" class="page-header"><h3> <?php echo $current[0]['name'] ?>'s Bursary Application History: </h3></div>
<hr>
<div class="row" style="margin: 5% auto;">
	<div class="col-sm-12 col-md-12 col-xs-12 col-lg-12">
		<div class="table-responsive">
			<table class="table table-bordered table-stripped">
				<thead>
					<tr style="background:black;color: white;"><th>Year</th> <th>Term</th> <th>Awarded Amount</th> <th>School</th> <th>Approval Status</th> <th>Date of Application</th></tr>
				</thead>
				<tbody>
				<?php for ($i=0; $i < count($current); $i++) {
				$bg="";
				if ($current[$i]['application_status']=="Awarded") {
					$bg=" style='background:lightgree;font-weight:bold;'";
				}
				 ?>
					<tr>
						<td><?php echo $current[$i]['year']; ?></td>
						<td><?php echo $current[$i]['term']; ?></td>
						<td><?php echo $current[$i]['amount_awarded']; ?></td>
						<td><?php echo $current[$i]['school']; ?></td>
						<td><?php if (!empty($current[$i]['application_status'])) {
					echo $current[$i]['application_status']; 
				}else{ echo "<span class='badge badge-danger'>PENDING REVIEW</span>"; } ?></td>
						<td><?php echo $current[$i]['date_of_appication']; ?></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	
</div>
<?php include_once("foot.php"); ?>