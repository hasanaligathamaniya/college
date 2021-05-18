<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<div class="container-fluid">
  <div class="col-sm-12">	
	<div class="card justify-content-center">
		<div class="card-header">Notification &nbsp;&nbsp; 
			<a href="../admin/?ref=View-notification" class="btn btn-outline-primary btn-sm">View</a>
		</div>
		<div class="card-body">
<?php 
if (!isset($_GET['edit_id'])) {

// Too late for headers already.
if (isset($_POST['add_notice'])) {

	$department = $_POST['department'];
	$msg = $_POST['msg'];
	$title = $_POST['title'];
	$date =date("d-M-y");
	
	$target_dir = "../bin/";
	$attech = $_FILES["attech"]["name"];
	$target_file = $target_dir . basename($attech);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image

	  $check = getimagesize($_FILES["attech"]["tmp_name"]);
	  if($check !== false) {
	    echo "File is an image - " . $check["mime"] . ".";
	    $uploadOk = 1;
	  } else {
	    echo "File is not an image.";
	    $uploadOk = 0;
	  }


	// Check file size
	if ($_FILES["attech"]["size"] > 5000000) {
	  echo "Sorry, your file is too large.";
	  $uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "pdf" ) {
	  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	  $uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	  echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	  if (move_uploaded_file($_FILES["attech"]["tmp_name"], $target_file)) {
	    echo "The file ". htmlspecialchars( basename( $_FILES["attech"]["name"])). " has been uploaded.";
	  } else {
	    echo "Sorry, there was an error uploading your file.";
	  }
	}



	$query="INSERT INTO notification(department,msg,title,attech,date) VALUES('{$department}','{$msg}','{$title}','{$attech}','{$date}')";
	$smtp= mysqli_query($conn,$query);

	// echo mysqli_error($conn);
	header("location: ../admin/?ref=notification");

}
 ?>

			<form action="" method="post" enctype="multipart/form-data">
			  <div class="form-group col-sm-6">
			    <label for="exampleFormControlSelect1">Select Department</label>
			    <select class="form-control" id="exampleFormControlSelect1" name="department" required>
			    	<optgroup label="U.G">
			    	 <option>Select*</option>
			    	  <option>BCA</option>
				      <option>BSc</option>
				      <option>B.com</option>
				      <option>BBA</option>
				      <option>BA</option>
				    <optgroup label="P.G">
				      <option>MCA</option>
				      <option>MSc</option>
				      <option>M.com</option>
				      <option>MBA</option>
				      <option>MA</option>
			    </select>
			  </div>
			  <div class="form-group col-sm-9">
			    <label for="exampleFormControlTextarea1">Title</label>
					<input type="text"  name="title" class="form-control" placeholder="Type title..">
			  </div>
			  <div class="form-group col-sm-9">
			    <label for="exampleFormControlTextarea1">Message</label>
			    <textarea class="form-control" id="exampleFormControlTextarea1"  name="msg" rows="3" placeholder="Type some thing..." required></textarea>
			  </div>
			  <div class="form-group col-sm-9">
			    <label for="exampleFormControlTextarea1">Attachment</label>
					<input type="file"  name="attech" class="form-control">
			  </div>

			  <div class="form-group col-sm-9">
				<button type="submit" name="add_notice" class="btn btn-primary">Submit</button>
			  </div>

			</form>


     <?php }


if (isset($_POST['update'])) {
	
	$id= $_GET['edit_id'];
    $department = $_POST['department'];
	$msg = $_POST['msg'];
	$title = $_POST['title'];
	$date =date("d-M-y");


	$target_dir = "../bin/";
	$attech = $_FILES["attech"]["name"];
	$target_file = $target_dir . basename($attech);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image

	  $check = getimagesize($_FILES["attech"]["tmp_name"]);
	  if($check !== false) {
	    echo "File is an image - " . $check["mime"] . ".";
	    $uploadOk = 1;
	  } else {
	    echo "File is not an image.";
	    $uploadOk = 0;
	  }


	// Check file size
	if ($_FILES["attech"]["size"] > 5000000) {
	  echo "Sorry, your file is too large.";
	  $uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "pdf" ) {
	  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	  $uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	  echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	  if (move_uploaded_file($_FILES["attech"]["tmp_name"], $target_file)) {
	    echo "The file ". htmlspecialchars( basename( $_FILES["attech"]["name"])). " has been uploaded.";
	  } else {
	    echo "Sorry, there was an error uploading your file.";
	  }
	}



	$query="UPDATE notification SET department ='{$department}' , msg='{$msg}', title='{$title}', attech='{$attech}' , date='{$date}' WHERE id='{$id}'";
	$smtp= mysqli_query($conn, $query);

	echo mysqli_error($conn);

    // header("location: ../admin/?ref=notification");
}

     if (isset($_GET['edit_id'])) { 


  		$query="SELECT * FROM notification WHERE id='{$_GET['edit_id']}'";
  		$smtp= mysqli_query($conn,$query);

  		$row=mysqli_fetch_array($smtp);
  			
  		 $department = $row['department'];
  		 $msg= $row['msg'];	
  		 $title= $row['title'];	
  		 $attech = $row['attech'];



      ?>

     		<form action="" method="post" enctype="multipart/form-data">
     		 <label class="h3">Update*</label>
			  <div class="form-group col-sm-6">
			    <label for="exampleFormControlSelect1">Select Department</label>
			    <select class="form-control" id="exampleFormControlSelect1" name="department" required>
			    	<option><?php echo $department; ?></option>
			    	<optgroup label="U.G">
			    	 <option>Select*</option>
			    	  <option>BCA</option>
				      <option>BSc</option>
				      <option>B.com</option>
				      <option>BBA</option>
				      <option>BA</option>
				    <optgroup label="P.G">
				      <option>MCA</option>
				      <option>MSc</option>
				      <option>M.com</option>
				      <option>MBA</option>
				      <option>MA</option>
			    </select>
			  </div>
			  <div class="form-group col-sm-9">
			    <label for="exampleFormControlTextarea1">Title</label>
					<input type="text"  name="title" class="form-control" placeholder="Type title.." value="<?php echo $title; ?>">
			  </div>
			  <div class="form-group col-sm-9">
			    <label for="exampleFormControlTextarea1">Message</label>
			    <textarea class="form-control" id="exampleFormControlTextarea1"  name="msg" rows="3" placeholder="Type some thing..." required><?php echo $msg; ?></textarea>
			  </div>
			  <div class="form-group col-sm-9">
			    <label for="exampleFormControlTextarea1">Attachment</label>
					<input type="file"  name="attech" class="form-control">
			  </div>

			  <div class="form-group col-sm-9">
				<button type="submit" name="update" class="btn btn-primary">Update</button>
			  </div>

			</form>

     		<?php } ?>

		</div>
	</div>
 </div>
</div>

 <script>
        CKEDITOR.replace( 'msg' );
</script>
