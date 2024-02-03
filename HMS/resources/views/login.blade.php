<?php

session_start();
/* Check Login form submitted */if(isset($_POST['Submit'])){
/* Define username and associated password array */$logins = array('ammar' => '123456','haider' => '1234567','daud' => '12345678');

/* Check and assign submitted Username and Password to new variable */$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Check Username and Password existence in defined array */if (isset($logins[$Username]) && $logins[$Username] == $Password){
/* Success: Set session variables and redirect to Protected page  */$_SESSION['UserData']['Username']=$logins[$Username];
header("location:member.php");
exit;
} else {
/*Unsuccessful attempt: Set error message */$msg="<span style='color:red'>Invalid Login Details</span>";
}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <style>
         body {
            background-image: url("");
            background-repeat: no-repeat;
            background-attachment: fixed;
  background-size: 100% 100%;
         }
      </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">
  
    <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  </head>
  <body>
    <br>
    <br>
    
    <div class="container-fluid">
    
    <div class="btn-group">
        <a class="btn btn-primary" href="Index.html">Back to main page</a>
        <a class="btn btn-danger" href="Alogin.php">Admin login</a>
        </div>
    </div>
    
    <br>
        
    </div>
    
    
    <form action="" method="post" name="Login_Form" style="max-width:500px; margin:auto">
      <?php if(isset($msg)){?>
        <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
        <?php } ?>
<div class="container-fluid">


        <h2 style="text-align: center;">Member Login</h2>
        <div class="input-container">
           <i class="fa fa-user icon">
           </i><input name="Username" type="text" class="input-container">
      </div>
      <div class="input-container">   
          <i class="fa fa-key icon"></i>
          <input name="Password" type="password" class="input-container">
      </div>
          <div class="input-container">
          <input class="btn btn-outline-danger btn-lg" name="Submit" type="submit" value="Login">
      </div> 
        
      </div>
        </form>
        
    
    </body>
</html>

    

    
    

