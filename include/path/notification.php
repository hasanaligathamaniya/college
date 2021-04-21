 <!-- Full Screen Search Start -->
<div id="fullscreen-search" class="fullscreen-search">
    <div class="fullscreen-search-close">
        <button class="toggle">
            <i class="icon-top"></i>
            <i class="icon-bottom"></i>
        </button>
    </div>
    <div class="fullscreen-search-form">
        <form action="#">
            <input type="text" placeholder="Search...">
        </form>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- Section Bottom Shape End -->
<div class="newsletter-section section section-padding position-relative">

    <div class="container">
        <div class="card">
            <div class="card-header p-0 bg-secondary">
                <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="<?php echo $linking ?>?ref=notification" class="btn btn-secondary">All</a>

                  <?php 

                    $query="SELECT department FROM notification GROUP BY department";
                    $smtp = mysqli_query($conn, $query);

                    while ($row =mysqli_fetch_array($smtp)) {
                      $department = $row['department'];

                      echo '<a href="'.$linking.'?ref=notification&dep='.$department.'" class="btn btn-secondary">'.$department.'</a>';
                    }

                   ?>




                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-hover">
                          <thead class="bg-light">
                          <tr>
                            <th scope="col" class="pl-4">Department</th>
                            <th scope="col">Message</th>
                            <th scope="col">Date</th>
                          </tr>
                        </thead>
                  <tbody>

                  <?php 

                    $dep="";

                    if (isset($_GET['dep'])) {
                      $dep=$_GET['dep'];
                    }

                    $query="SELECT * FROM notification WHERE department LIKE '%{$dep}%'";
                    $smtp= mysqli_query($conn,$query);
                    $i=1;
                    while ($row=mysqli_fetch_array($smtp)) {
                      
                     $department = $row['department'];
                     $msg= $row['msg']; 
                     $id= $row['id']; 

                     echo '

                      <tr>

                        <td class="pl-4">'.$department.'</td>
                        <td>'.$msg.'</td>
                        <td>21/03/2021</td>  
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
