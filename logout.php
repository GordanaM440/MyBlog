<?php
	session_start();
	if(!isset($_SESSION["userid"])) {
      header("Refresh:0; url=index.php?message=You are not logged in!");
    }
	unset($_SESSION["userid"]);
	header("Refresh:0; url=index.php?message=Logout successful!");
?>