<div class="container-fluid">
  <div class="col-sm-12">	
	<div class="card justify-content-center">
		<div class="card-header">Notification &nbsp;&nbsp; 
			<a href="../admin/?ref=Add-notification" class="btn btn-outline-primary btn-sm">Add</a>
		</div>
		<div class="card-body">
			<table class="table border">
			  <thead class="bg-light">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Title</th>
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
			  		 $title= $row['title'];	
			  		 $id= $row['id'];	

			  		 echo '

					  	<tr>
					      <th scope="row">'.$i.'</th>
					      <td>'.$title.'..</td>
					      <td>'.$department.'</td>
					      <td>
					      <a onclick="return confirm(\'Are you sure you want to delete this item?\');" href="../admin/?ref=View-notification&remove_id='.$id.'" class="btn btn-outline-primary"><i class="fa fa-trash" aria-hidden="true"></i></a>&nbsp;&nbsp;
					       <a href="../admin/?ref=Add-notification&edit_id='.$id.'" class="btn btn-outline-primary">
					       <i class="fas fa-edit"></i></a>
					       </td>	
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
</div>
<?php 


// echo $_GET['remove_id'];
if (isset($_GET['remove_id'])) {
	
	$id=$_GET['remove_id'];

	$query="DELETE FROM notification WHERE id='{$id}'";
	$smtp= mysqli_query($conn,$query);

	header("location: ../admin/?ref=View-notification");

}

 ?>