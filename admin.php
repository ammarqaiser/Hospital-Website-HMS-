<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:Alogin.php");
exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="jumbotron jumbotron-fluid">
    <div class="container" style="text-align: center;">
        <img src="images/logo.png"  alt="" style="width: 10rem;">
        <h1 class="display-3">Admin Panel</h1>
        <p class="lead">Hospital Management System</p>
        <hr class="my-2">
           
       </div>
       <p class="container-fluid">
        <a class="btn btn-danger btn-lg" href="index.html" role="button">Logout</a>
        <a class="btn btn-info btn-lg" href="Index.html" role="button">Back to Main Page</a>
    </p>
    </div>
</div>
<div class="container-fluid">

     
<section class="statistical cards">
      <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="shadow">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-center">
                    <h3 class="primary">278</h3>
                    <span>New Appointment</span>
                  </div>
                  
                  <div class="align-self-center">
                    <i class="icon-book-open primary font-large-2 float-right"></i>
                  </div>
                </div>
                <div class="progress mt-1 mb-0" style="height: 7px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="shadow">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-center">
                    <h3 class="warning">156</h3>
                    <span>Todays check up`s</span>
                  </div>
                  <div class="align-self-center">
                    <i class="icon-bubbles warning font-large-2 float-right"></i>
                  </div>
                </div>
                <div class="progress mt-1 mb-0" style="height: 7px;">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
    
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="shadow">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-center">
                    <h3 class="success">64.89 %</h3>
                    <span>recovery Rate</span>
                  </div>
                  <div class="align-self-center">
                    <i class="icon-cup success font-large-2 float-right"></i>
                  </div>
                </div>
                <div class="progress mt-1 mb-0" style="height: 7px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="shadow">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-center">
                    <h3 class="danger">423</h3>
                    <span>Total Visits</span>
                  </div>
                  <div class="align-self-center">
                    <i class="icon-direction danger font-large-2 float-right"></i>
                  </div>
                </div>
                <div class="progress mt-1 mb-0" style="height: 7px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  </div> 
<br>
<Br>


<h1 style="text-align: center;">
    <hr class="my-2">
Messages and Queries
<hr class="my-2">
</h1>
<div>
<div id="main-content">
        <h2>All Records</h2>
        <?php
    
    $database = "mysql:host=localhost;dbname=doctor schedule";
        $username = "root";
        $password = "";
        $conn = new PDO($database, $username, $password) or die("Connection Failed");
        $sql = $conn->query("Select * from feedback");
    
            
            
      
            
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div class="container-fluid">
 <table class="table table-hover table-dark" >
        
            <thead>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>State</th>
            <th>Feed Back</th>
            <th>Actions</th>
            </thead>
            

            <tbody>
                
            <?php foreach($sql->fetchAll() as $value){ ?>
                <tr>
                    <td><?php echo "{$value[0]}";?></td>
                    <td><?php echo "{$value[1]}";;?></td>
                    <td><?php echo "{$value[2]}";?></td>
                    <td><?php echo "{$value[3]}";?></td>
                    <td><?php echo "{$value[4]}";?></td> 
                    <td><a class="btn btn-warning" href="https://www.google.com/gmail" target="_blank">Reply</a></td>
                    
                    <td></td>
                                   
                </tr>
                
                <?php } ?>
                
            </tbody>
        
            </table>
            
    </div>
    <!--Contact section Messages to be shown here-->
</div>
<br>
<br>
<h1 style="text-align: center;">
    <hr class="my-2">
Online Booked Apointments
<hr class="my-2" >
</h1>

<div>
    <div id="main-content">
        <h2>All Records</h2>
        <?php
    
    $database = "mysql:host=localhost;dbname=doctor schedule";
        $username = "root";
        $password = "";
        $conn = new PDO($database, $username, $password) or die("Connection Failed");
        $sql = $conn->query("Select * from bookapointment");
    
            
            
      
            
        ?>
<div class="container-fluid">
 <table class="table table-hover table-dark" >
      
            <thead>
            <th>Name</th>
            <th>User Name</th>
            <th>Department</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Phone Number 2</th>
            <th>Date</th>
            <th>Time</th>
            <th>Actions</th>
            </thead>
            <tbody>
            <?php foreach($sql->fetchAll() as $value){ ?>
                <tr>
                    <td><?php echo "{$value[0]}";?></td>
                    <td><?php echo "{$value[1]}";;?></td>
                    <td><?php echo "{$value[2]}";?></td>
                    <td><?php echo "{$value[3]}";?></td>
                    <td><?php echo "{$value[4]}";;?></td>
                    <td><?php echo "{$value[5]}";?></td>
                    <td><?php echo "{$value[6]}";?></td>
                    <td><?php echo "{$value[7]}";;?></td>  
                    <td><a  href="" class="btn btn-success">Accept</a><a  href="" class="btn btn-danger">Decline</a></td>
                                      
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!--Booked apointments to be shown here-->
</div>
<br>
<br>
<h1 style="text-align: center;">
    <hr class="my-2">
Upload lab reports
<hr class="my-2">
</h1>
<!--lab reports upload menu show here-->

<form action="">
<br>
<br>
    
    <label for="img">Select Report:</label>
    <input type="file"  class="btn btn-info" id="img" name="img" accept="image/*">
    <input type="submit" class="btn btn-info">

    
  </form>
  <br>
  <footer class="bg-dark text-center text-lg-start text-light ">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright All Right Reserved
    <br>
    <p  class="pull-left;"><a class="mx-5" style="color: #f1f1f1;"  href="#">Back to top</a></p> 
  </div>
  
</footer>



</body>
</html>