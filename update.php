<?php

include "config.php";


if(isset($_POST['update'])){


$firstname = $_POST['firstname'];
$user_id = $_POST['user_id'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "UPDATE `users` SET `firstname`='$firstname',`lastname`= '$lastname',`email`= '$email',`password`='$password' WHERE `id`= '$user_id'";


$result = $conn->query($sql);


if($result == TRUE){

  echo "new record updated successfully.";


} else{

  echo "ERROR:". $sql . "<br>". $conn->error;


}



}







if(isset($_GET['id'])){

$user_id = $_GET['id'];


$sql = "SELECT * FROM `users` WHERE `id` = '$user_id'";

$result = $conn->query($sql);


if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
       
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $email = $row['email'];
        $password = $row['password'];
        $id = $row['id'];

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
    <h2>Users Update Form</h2>
    <input type = "text" placeholder = "firstname" name = "firstname" value = "<?php echo $firstname ?>">
    <input type = "hidden"  name = "user_id" value = "<?php echo $id; ?>">
    <br><br>
    <input type = "text" placeholder = "lastname" name = "lastname" value = "<?php echo $lastname; ?>">
    <br><br>
    <input type = "email" placeholder = "email" name = "email" value = "<?php echo $email; ?>">
    <br><br>   <input type = "password" placeholder = "password" name = "password" value = "<?php echo $password;?> ">
    <br><br>
    <input type = "submit" name = "update" value = "update">
  



    </form>
</body>
</html>






<?php
    } else{


    header('location:view.php');


    }



}






?>