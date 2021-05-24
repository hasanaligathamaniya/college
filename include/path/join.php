<?php 
error_reporting(0);
  if (isset($_POST['login'])) {

    $email = $_POST['email'] ;
    $password = $_POST['password'] ;


    $email = mysqli_real_escape_string($conn ,$email );
    $password = mysqli_real_escape_string($conn ,$password );

    $query="SELECT * FROM users WHERE email = '{$email}'";
    $select_user_query = mysqli_query($conn,$query);

    if(!$select_user_query){
      die("query faild" . mysqli_error($conn));
    }

    $row = mysqli_fetch_array($select_user_query);

      $user_id = $row['user_id'];
      $username = $row['username'];
      $db_email = $row['email'];
      $db_password = $row['password'];
  

  $password = crypt($password,$db_password);

    if ($email !== $db_email && $password !== $db_password){

      $msg ="<div class='alert alert-danger' role='alert'>The email/password is wrong.</div>";
    }else if($email == $db_email && $password == $db_password){


      setcookie('co_username', $username, time() + (86400 * 2), "/");
      setcookie('co_db_email', $db_email, time() + (86400 * 2), "/");
      setcookie('co_user_id', $user_id, time() + (86400 * 2), "/");


      header("Location: {$linking}");  

    }

    else{
      $msg ="<div class='alert alert-danger' role='alert'>The email/password is wrong or not verified</div>";
  }



  }

else {

      $msg ="";

  }

// $db_email='';
   if(isset($_POST['join'])){

      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['psw'];
      $jeecode=rand(100000,10000000000000000);
      $date = date("d-M-Y") ;

      $query="SELECT * FROM users WHERE email = '$email'";
      $smtp = mysqli_query($conn,$query);

      if (mysqli_num_rows($smtp) > 0) {
        $row = mysqli_fetch_assoc($smtp); 
        $db_email=$row['email'];
      }

        if($email == $db_email)
        {
            $message2 ="<div class='alert alert-danger' role='alert'>email already exists</div>";
        }
    
else{
  

      $username = mysqli_real_escape_string($conn , $username);
      $email = mysqli_real_escape_string($conn , $email);
      $password = mysqli_real_escape_string($conn , $password);

      $salt = '$2a$10$kjhfdgiamcrazystring22$';

      $password = crypt($password,$salt);

      $query = "INSERT INTO users (username,email,password,jeecode,date)  VALUES ('{$username}','{$email}','{$password}','{$jeecode}','{$date}') ";
      $smtp = mysqli_query($conn,$query);
      if(!$smtp){

        die("query faild" . mysqli_error($conn) .' '. mysqli_errno($conn));
      }

    $query="SELECT * FROM users WHERE email = '{$email}' AND jeecode='{$jeecode}'";
    $smtp = mysqli_query($conn,$query);

    if(!$smtp){
      die("query faild" . mysqli_error($conn));
    }

    $row = mysqli_fetch_array($smtp);

      $user_id = $row['user_id'];
      $username = $row['username'];
      $db_email = $row['email'];

      setcookie('co_username', $username, time() + (86400 * 2), "/");
      setcookie('co_db_email', $db_email, time() + (86400 * 2), "/");
      setcookie('co_user_id', $user_id, time() + (86400 * 2), "/");


      // require '../vendor1/phpmailer/PHPMailerAutoload.php';

      // $mail = new PHPMailer;
      // $mail->IsSMTP();        
      // $mail->Host = 'mail.shiftsafely.com'; 
      // $mail->Port = 587;        
      // $mail->SMTPAuth = true; 
      // $mail->SMTPSecure = 'tls';     
      // $mail->Username = 'booking@shiftsafely.com'; 
      // $mail->Password = 'jzX+m9%*V0xQ';        
      //       // confirmed
      // $mail->setFrom('booking@shiftsafely.com','Aliekart.com');    
      // $mail->AddAddress($db_email);
      // $mail->IsHTML(true);          
      // $mail->Subject = 'Verify Alert';   
      // $mail->Body = "

      // ";  
      // if($mail->Send())       
      // {
      //  echo '';
      // }
      // else
      // {
      //  echo '<label class="text-primary">There is an Error</label>';
      // }


      // echo '<script>location.replace("../vendor/?ref=settings")</script>';

      header("Location: {$linking}");  

    
    }

}

    else {

      $message2 =" ";
      

    }
    ?>
   <!-- Page Title Section Start -->
        <div class="page-title-section section">
            <div class="page-title">
                <div class="container">
                    <h1 class="title">Login Register</h1>
                </div>
            </div>
            <div class="page-breadcrumb">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="current">My account</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Title Section End -->


        <!--Login Register section start-->
        <div class="login-register-section section section-padding-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6">
                                <!-- Login Form Start -->   
                                <div class="login-form-wrapper">
                                    <h3 class="title">Login</h3>
                                    <?php echo  $msg; ?>
                                    <form class="login-form" action="" method="post">
                                        <div class="single-input mb-30">
                                            <label for="username">Email</label>
                                            <input type="text" id="Email_not_exist" onfocusout="email_not_exist()" name="email" placeholder="Email" required>
                                            <div id="err2"></div>
                                        </div>
                                        <div class="single-input mb-30">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" name="password" placeholder="Password" autocomplete="off" required>
                                        </div>
                                        <div class="single-input mb-30">
                                            <div class="row">
                                                <div class="col-sm-6 remember-me-wrap">
                                                    <div class="checkbox-input">
                                                        <input type="checkbox" name="login-form-remember" id="login-form-remember">
                                                        <label for="login-form-remember">Remember me</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 lost-your-password-wrap">
                                                    <p>
                                                        <a href="#" class="lost-your-password">Lost your password?</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-input">
                                            <button class="btn btn-primary btn-hover-secondary btn-width-100" type="submit" name="login">Log In</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- Login Form End -->
                            </div>
                            <div class="col-xl-6 offset-xl-1 col-lg-6">
                                <!-- Register Form Start -->
                                <div class="login-form-wrapper mt-sm-50 mt-xs-50">
                                    <h3 class="title">Register</h3>
                                    <?php echo  $message2; ?>
                                    <form class="register-form" action="#" method="post">
                                        <div class="single-input mb-30">
                                            <label for="usernameOne">Username</label>
                                            <input type="text" id="usernameOne" name="username" placeholder="Username">
                                        </div>
                                        <div class="single-input mb-30">
                                            <label for="email">Email</label>
                                            <input type="text" id="Email_exist" name="email"  onfocusout="email_exist()" autocomplete="off" placeholder="Email">
                                            <div id="err1"></div>
                                        </div>
                                        <div class="single-input mb-30">
                                            <label for="passwordOne">Password</label>
                                            <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                        </div>
                                       <div id="message" class="mb-2" style="display: none">
                                          <h5>Password must contain the following:</h5>
                                          <p id="letter" class="text-danger">A <b>lowercase</b> letter</p>
                                          <p id="capital" class="text-danger">A <b>capital (uppercase)</b> letter</p>
                                          <p id="number" class="text-danger">A <b>number</b></p>
                                          <p id="length" class="text-danger">Minimum <b>8 characters</b></p>
                                        </div>
                                        <div class="single-input">
                                            <button class="btn btn-primary btn-hover-secondary btn-width-100" type="submit" name="join">Register</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- Register Form End -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Login Register section end-->
        <script>
        var myInput = document.getElementById("psw");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() {
          document.getElementById("message").style.display = "block";
        }

        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() {
          document.getElementById("message").style.display = "none";
        }

        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
          // Validate lowercase letters
          var lowerCaseLetters = /[a-z]/g;
          if(myInput.value.match(lowerCaseLetters)) {  
            letter.classList.remove("text-danger");
            letter.classList.add("text-success");
          } else {
            letter.classList.remove("text-success");
            letter.classList.add("text-danger");
          }
          
          // Validate capital letters
          var upperCaseLetters = /[A-Z]/g;
          if(myInput.value.match(upperCaseLetters)) {  
            capital.classList.remove("text-danger");
            capital.classList.add("text-success");
          } else {
            capital.classList.remove("text-success");
            capital.classList.add("text-danger");
          }

          // Validate numbers
          var numbers = /[0-9]/g;
          if(myInput.value.match(numbers)) {  
            number.classList.remove("text-danger");
            number.classList.add("text-success");
          } else {
            number.classList.remove("text-success");
            number.classList.add("text-danger");
          }
          
          // Validate length
          if(myInput.value.length >= 8) {
            length.classList.remove("text-danger");
            length.classList.add("text-success");
          } else {
            length.classList.remove("text-success");
            length.classList.add("text-danger");
          }
        }


      function email_exist(){
  
        var email = document.getElementById('Email_exist').value;

              $(document).ready(function(){

              $.ajax({
                  url: 'include/function.php/?email_exist=' + email ,
                  type: 'GET',
                  dataType: 'html',
                  success: function (data) {
                      $('#err1').html(data);
                  }

          });
      });
     }  

       function email_not_exist(){

        var email = document.getElementById('Email_not_exist').value;

              $(document).ready(function(){

              $.ajax({
                  url: 'include/function.php/?email_not_exist=' + email ,
                  type: 'GET',
                  dataType: 'html',
                  success: function (data) {
                      $('#err2').html(data);
                  }

          });
      });
     } 

        </script>