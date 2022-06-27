<?php

include  "config.php";


if(isset($_POST['submit'])){


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];



$sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`) VALUES ('$firstname','$lastname','$email','$password')"; 


$result = $conn->query($sql);


if($result == TRUE){

  echo "new record created successfully.";


} else{

  echo "ERROR:". $sql . "<br>". $conn->error;


}

$conn->close();

}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "" method = "POST">
    <h2>Signup Form</h2>
    <input type = "text" placeholder = "firstname" name = "firstname">
    <br><br>
    <input type = "text" placeholder = "lastname" name = "lastname">
    <br><br>
    <input type = "email" placeholder = "email" name = "email">
    <br><br>
    <input type = "password" placeholder = "password" name = "password">
    <br><br>
    <input type = "submit" name = "submit" value = "submit">




    </form>
</body>
</html>