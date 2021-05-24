<?php 
include '../admin/include/config.php';
// echo "<label class=''></label>";

if (isset($_GET['email_exist'])) {
  
  $query="SELECT * FROM users WHERE email = '{$_GET['email_exist']}'";
  $smtp = mysqli_query($conn,$query);

  if (mysqli_num_rows($smtp) > 0) {
    echo "<label class='text-danger text-muted'>Email already exist!</label>";
  }
}

if (isset($_GET['email_not_exist'])) {
  
  $query="SELECT * FROM users WHERE email = '{$_GET['email_not_exist']}'";
  $smtp = mysqli_query($conn,$query);

  if (mysqli_num_rows($smtp) > 0) {
    
  }else{
  	echo "<label class='text-danger text-muted'>Email Not exist!</label>";
  }

}

 ?>