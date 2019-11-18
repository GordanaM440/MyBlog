<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">

		//confirmation alert

		function deleteconfirm() {
			return confirm("Do you want to delete this post?");
		}
	</script>
</head>
<body>
	<?php
		require_once("header.php");
	?>
	<div class = "container">
	<div class = "Header">
		<div class = "container">
			<h1 class="text-center"> My blog </h1>
		</div>
	</div>
	</div>
	<?php

		//show message

		if(isset($_GET["message"]) && (!isset($message) || $message=="")) {
			$msg = $_GET["message"];
			echo '
				<div class="container">
					<div class="col-md-10">
						<h4> '.$msg.'</h4>
					</div>
				</div>
			';
		}

		//Show unnecessary posts

		$filter = function($id, $userid, $author, $title) { return true; };
		require_once("retrieve_posts.php");
	?>
</body>
</html>