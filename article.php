<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		require_once("header.php");
		if(!isset($_SESSION["userid"])) {
      		header("Refresh:0; url=index.php?message=You are not logged in.Try again!");
    	}
		$filter = function($id, $userid, $author, $title) { return $userid==$_SESSION["userid"]; };
		require_once("retrieve_posts.php");
	?>
</body>
</html>