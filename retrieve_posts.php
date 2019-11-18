<?php
include("db.php");
$stmt = mysqli_prepare($conn, "SELECT id, Title, Content, author, datetime, userid FROM posts ORDER BY datetime DESC");
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $id, $title, $content, $author, $datetime, $user_id);
$c = 0;
	while(mysqli_stmt_fetch($stmt)) {
			if($filter($id, $user_id, $author, $title)) {
			$c = $c + 1; //counter
			echo '
				<p> </p>
				<p> </p>
			';
			echo '
				<div class="container">
				<div class=jumbotron>
				<div class="posts">
					<div class="container">
							<a href="info.php?post_id='.$id.'"> <h3 class="text-center"> '.$title.' </h3> </a>
							<p> Written by '.$author.' on '.$datetime.' </p>
							<p>  '.nl2br($content).' </p>
						
					</div>

			';
			
			if(isset($_SESSION["userid"]) && $_SESSION["userid"]==$user_id) {
				echo '
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<div class="text-center">
									<p>  <a href= "delete.php?id='.$id.'" onclick="return deleteconfirm()"> Delete </a> </p>
								</div>
							</div>
							<div class="col-md-1">
								<div class="text-center">
									<p>  <a href= "edit1.php?id='.$id.'"> Edit </a> </p>
								</div>
							</div>
							<div class="col-md-1">
								<div class="text-center">
									<p>  <a href= "info.php?post_id='.$id.'"> Comment </a> </p>
								</div>
							</div>
						</div>
					</div>
					
				';
		
			} elseif(isset($_SESSION["userid"])) {
				echo '
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<p>  <a href= "info.php?post_id='.$id.'"> Comment </a> </p>
							</div>
						</div>
						</div>
					</div>
			
				';		
			}
			echo '
			</div>
			</div>
			</div>
			';
			
		}
	}

if($c==0) {
	echo '
		<div class="container">
			<h4> There is not posts.</h4>
		</div>
	';
}
mysqli_stmt_close($stmt);
?>
	