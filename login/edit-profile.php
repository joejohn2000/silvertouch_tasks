<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>signup</title>
</head>



<?php
 
 session_start();
 
 include "db_conn.php";
 if(isset($_POST['edit']))
 {
    $id=$_SESSION['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
  
    $select= "select * from users where id='$id'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
   
       $update = "update users set name='$name',user_name='$username',email='$email' where id='$id'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
        header("Location: home.php?success=Your account has been edited successfully");
       }
       else
       {
           header('location:edit-profile.php');
       }
    }
    else
    {
        header('location:edit-profile.php');
    }
 }
?>




<body>
     <form action="edit-profile.php" method="post">
     	<h2>Edit details</h2>
     	name: <input type="text" name="name">
        user name: <input type="text" name="username">
        email: <input type="email" name="email">
        <input type="submit" name="edit">
                
     	
     </form>





     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>