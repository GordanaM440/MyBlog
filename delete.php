<?php
	include("db.php");
	$id = $_GET["id"];
	$stmt = mysqli_prepare($conn, "DELETE FROM posts WHERE id= ?" );
	mysqli_stmt_bind_param($stmt, "i", $id);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("Refresh:0; url=index.php?message=Article is deleted");
?>