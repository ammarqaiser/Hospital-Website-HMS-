<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$state = $_POST['state'];
$feedback = $_POST['feedback'];
if($firstname!="" && $lastname!="" && $email!= "" && $state !="" && $feedback!=""){
    $database = "mysql:host=localhost;dbname=doctor schedule";
    $username = "root";
    $password = "";
    $conn = new PDO($database, $username, $password) or die("Connection Failed");

    $sql = "INSERT INTO feedback (firstname,lastname,email,state,feedback) VALUES (?,?,?,?,?)";
    $conn->prepare($sql)->execute([$firstname, $lastname, $email,$state,$feedback]);


    header("Location: http://localhost/HMS/index.html");
    
    
}
?>