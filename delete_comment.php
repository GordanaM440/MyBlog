<?php
	include("db.php");
	if(!isset($_SESSION["userid"])) {
	      header("Refresh:0; url=index.php?message=You are not logged in!");
	    } elseif(!isset($_GET["id"]) || !isset($_GET["post_id"])) {
	    	header("Refresh:0; url=index.php");
	    }
	$id = $_GET["id"];
	$stmt = mysqli_prepare($conn, "DELETE FROM comments WHERE id= ?" );
	mysqli_stmt_bind_param($stmt, "i", $id);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("Refresh: 0; url=info.php?message=Comment is deleted&post_id=".$_GET["post_id"]."");
?>