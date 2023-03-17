



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
<title>p20</title>
</head>
<body>
<div id = "frm">
<form  method = "POST">  
<div class="mb-3">

  <input type="string" class="form-control"  name="element" placeholder="enter element">

  <input type="submit" class="btn btn-warning form-control" value="Submit value">
</div>
</form>
</div>

<?php
$car = array('bmw', 'benz', 'audi');

?>



<div class="alert alert-warning alert-dismissible fade show output" role="alert">
  <strong><center>  <?php

echo 'Original array : '."<br>";
foreach ($car as $x) 
{echo "$x ";}
$inserted = $_POST['element'];
array_splice( $car, 4, 0, $inserted ); 
echo " <br> After inserting new element the array is : "."<br>";
foreach ($car as $x) 
{echo "$x ";}
echo "<br>"




?></center></strong> 
  
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>