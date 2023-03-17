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
<title>p39</title>
</head>
<body>


<div id = "frm">
<form  method = "POST">  
<div class="mb-3">

  <input type="number" class="form-control"  name="num" placeholder="your num">
 
  <input type="submit" class="btn btn-warning form-control" value="Submit value">
</div>
</form>
</div>
<div class="alert alert-warning alert-dismissible fade show output" role="alert">
  <strong><center> 
 
  <?php
$num = $_POST['num'];

  
      for($i=1;$i<=10;$i++)
        {
          echo $i ."*". $num ."=".$i*$num. "<br>";
        }
          ?>


</center></strong> 
  
</div>
 
     
  

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>