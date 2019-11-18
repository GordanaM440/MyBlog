<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
    require_once("header.php");
    //to restrict access
    if(!isset($_SESSION["userid"])) {
      header("Refresh:0; url=index.php?message=You are not logged in!");
    } elseif(!isset($_GET["id"])) {
      header("Refresh:0; url=index.php");
    }
	?>
  <p></p>
  <p></p>
  <div class="container">
  <?php
    $post_id = $_GET["id"];
    include("edit.php");
    if(isset($message)) {
      header("Refresh:0; url=index.php?message=".$message."");
    }
    echo '
    	<form role="form" action="" method="post">
        	<div class="form-group">
        		<label for="text">Title</label>
        		<input type="text" class="form-control" name="title" value="'.$title.'"/>
      		</div>
      		<div class="form-group">
        		<label for="text"> Content</label>
        		<textarea type="text" class="form-control" rows="19" name="content">'.$content.'</textarea>
      		</div>
          <div>
            <p> </p>
            <button type="submit" class="btn btn-default"> Submit </button>
          </div>
      </form>
    ';      
  ?>
  </div>
</body>
</html>


          