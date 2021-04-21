
<?php include 'include/config.php'; ?>
<?php 

// Too late for headers already.
if (isset($_POST['add_notice'])) {

	$department = $_POST['department'];
	$msg = $_POST['msg'];
	
	$query="INSERT INTO notification(department,msg) VALUES('{$department}','{$msg}')";
	$smtp= mysqli_query($conn,$query);

	// echo mysqli_error($conn);
	header("location: ../admin/?ref=notification");

}

 ?>

<div class="container-fluid">
  <div class="col-sm-6">	
	<div class="card justify-content-center">
		<div class="card-header">Notification</div>
		<div class="card-body">
			<form action="" method="post">
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
			    <label for="exampleFormControlTextarea1">Message</label>
			    <textarea class="form-control" id="exampleFormControlTextarea1"  name="msg" rows="3" placeholder="Type some thing..." required></textarea>
			  </div>

			  <div class="form-group col-sm-9">
				<button type="submit" name="add_notice" class="btn btn-primary">Notify</button>
			  </div>

			</form>

			<table class="table border">
			  <thead class="bg-light">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Message</th>
			      <th scope="col">Department</th>
			      <th scope="col">Edit</th>
			    </tr>
			  </thead>
			  <tbody>

			  	<?php 

			  		$query="SELECT * FROM notification";
			  		$smtp= mysqli_query($conn,$query);
			  		$i=1;
			  		while ($row=mysqli_fetch_array($smtp)) {
			  			
			  		 $department = $row['department'];
			  		 $msg= $row['msg'];	

			  		 echo '

					  	<tr>
					      <th scope="row">'.$i.'</th>
					      <td>'.$msg.'</td>
					      <td>'.$department.'</td>
					      <td></td>
					    </tr>

			  		 ';
			  		 $i++;

			  		}

			  	 ?>


			  </tbody>
			</table>
		</div>
	</div>
 </div>
</div>