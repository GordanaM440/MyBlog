<html>
	<head>
		<title> My blog </title>
		<link rel="stylesheet" type="text/css" href="static/css/bootstrap.css"/>
		<script type="text/javascript">
			function logoutconfirm() {
				return confirm("Do you want to logout?");
			}
		</script>
	</head>
	<body>
		<div class="container">
			<div class="nav" >
					<div class="pull-left">
						<ul class="nav nav-pills">
						  <li  id ="home" ><a href="index.php"> Home </a> </li>
						
						 </ul>
					</div>
					<div class="pull-right">
						<?php
						//login bar based on login status
						include("login.php");
						if(!isset($_SESSION["userid"])) {
							echo '
							<form class="form-inline"; method="post"; action="index.php?message=Login successful">
								<input class ="form-control" type="text"; placeholder="username"; name="username"; />
								<input class ="form-control" type="password"; placeholder="password"; name="password"/>
								<button type="submit" class="btn btn-default"> Login</button>
							</form>
							';
							if(isset($message)) {
								echo $message;
							}
						} else {
							echo '
								<ul class="nav nav-pills">
						  			<li class="active"><a href="index.php"> Welcome '.$_SESSION["username"].' </a> </li>
						  			<li id="post"> <a href="post.php" data-toggle="pill"> Write youre Article! </a> </li>
						  			<li id="myarticles"> <a href="article.php" data-toggle="pill"> Here is your Articles! </a> </li>
						  			<li id="logout" > <a href="logout.php" data-toggle="pill" onclick="return logoutconfirm()"> Logout </a> </li>
						 		</ul>
							';				
						}
						?>
					</div>
			</div>
		</div>
	</body>
</html>		

