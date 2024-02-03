<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Member-portal</title>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Index.css">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="index.js"></script>
    <div class="jumbotron jumbotron-fluid">
        <div class="container" style="text-align: center;">
            <img src="images/logo.png"  alt="" style="width: 10rem;">
            <h1 class="display-3">Member Portal</h1>
            <p class="lead">Hospital Management System</p>
            <hr class="my-2">
               
           </div>
           <p class="container-fluid">
            <a class="btn btn-danger btn-lg" href="logout.php" role="button">Logout</a>
           <!-- <a class="btn btn-info btn-lg" href="Index.html" role="button">Back to Main Page</a>-->
            <a class="btn btn-warning btn-lg" href="book apointment.html" role="button">Book Apointment</a>
            <a class="btn btn-primary btn-lg" href="lab reports.html" role="button">Lab reports</a>
        </p>
        </div>
    </div>
    <h1 style="text-align: center;">
        <hr class="my-2">
   MY Apointments
    <hr class="my-2">
    </h1>
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
                   
                                      
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <section>
<footer class="bg-dark text-center text-lg-start text-light" >
  <br>
  <div class="footer" ></div>
  <h3>Follow us on social media!!!</h3>
<a href="https://web.facebook.com/" target="_blank" class="fa fa-facebook"></a>
<a href="https://twitter.com/?lang=en" target="_blank" class="fa fa-twitter" style="color:lightblue;"></a>
<a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube-play" style="color: red;"></a>
<a href="https://www.linkedin.com/" target="_blank" class="fa fa-linkedin-square" style="color: white;"></a>
<a href="https://github.com/" target="_blank" class="fa fa-github-square" style="color: orange;"></a>


</footer>
<footer class="bg-dark text-center text-lg-start text-light ">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright All Right Reserved
    <br>
    <p  class="pull-left;"><a class="mx-5" style="color: #f1f1f1;"  href="#">Back to top</a></p> 
  </div>
  
</footer>
</section>
</body>
</html>