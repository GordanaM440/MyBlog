<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
    require_once("header.php");
    
    if(!isset($_SESSION["userid"])) {
      header("Refresh:0; url=index.php?message=You are not logged in!");
    }
	?>
  <p></p>
  <p></p>
  <div class="container">
  <?php
    include("insert.php");
  ?>
  	<form role="form" action="" method="post">
      	<div class="form-group">
      		<label for="text">Title</label>
      		<input type="text" class="form-control" name="title" />
    		</div>
    		<div class="form-group">
      		<label for="text"> Content</label>
      		<textarea type="text" class="form-control" rows="19" name="content"> </textarea>
    		</div>
        <div>
          <p> </p>
          <button type="submit" class="btn btn-default"> Submit </button>
          <?php
              
              if(isset($message)) {
              header("Refresh:0; url=index.php?message=".$message."");
            }
          ?> 
        </div>
  	</form>
  </div>
</body>
</html>