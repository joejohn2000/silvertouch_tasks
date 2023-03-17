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
<title>p11</title>
</head>
<body>
<?php
$num = $_POST['num'];

  $sum = 0;
  $num = (string)$num;
  for ($i = 0; $i < strlen($num); $i++) 
  {
    $sum = $sum + pow((string)$num[$i],strlen($num));
  }
  if ((string)$sum == (string)$num) 
  {
    $res=" armstrong";
  } else 
  {
    $res="not an armstrong";
  }


?>
<div id = "frm">
<form  method = "POST">  
<div class="mb-3">

  <input type="number" class="form-control"  name="num" placeholder="your num1">

  <input type="submit" class="btn btn-warning form-control" value="Submit value">
</div>
</form>
</div>
<input class="form-control output" type="text" value=" <?php echo $num." is ".$res; ?>" aria-label="readonly input example" readonly>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>