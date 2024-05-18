<?php
include_once("head.php");
include_once("autoload.php");
include_once("functions.php");


if (isset($_GET['id'])) {
	viewApplication($_GET['id']);
}else{
	echo "<h2>ERROR 404</h2>";
}
?>


<?php include_once("foot.php"); ?>