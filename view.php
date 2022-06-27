<?php

include "config.php";


$sql = "SELECT * FROM users";

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    
<div class = "container">

  <h2>users</h2>    

<table class = "table">
<thead>

<tr>

<th>ID</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Action</th>


</tr>





</thead>

<tbody>
<?php

if($result->num_rows > 0){

while($rows = $result->fetch_assoc()){

  ?>     
    <tr>
    <td><?php echo $rows['id'];?></td>
    <td><?php echo $rows['firstname'];?></td>
    <td><?php echo $rows['lastname'];?></td>
    <td><?php echo $rows['email'];?></td>
    <td><a class = "btn btn-info" href = "update.php?id=<?php echo $rows['id'];?>">Edit</a>&nbsp<a a class = "btn btn-danger" href = "delete.php?id=<?php echo $rows['id'];?>">Delete</a></td></td>

    
    
    
    </tr>
            




  <?php   }



}




?>


</tbody>


</table>




</div>


</body>
</html>