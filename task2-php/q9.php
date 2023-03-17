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
<title>p2</title>
</head>
<body>
<?php
$num = $_POST['num'];
$res = $num > 30
? "greater than 30"
: ($num > 20
? "greater than 20"
: ($num >10
? "greater than 10"
: "Input a number atleast greater than 10!")); 

?>
<div id = "frm">
<form  method = "POST">  
<div class="mb-3">
  <label  class="form-label">num</label>
  <input type="number" class="form-control"  name="num" placeholder="your num">
  <input type="submit" class="btn btn-warning form-control" value="Submit num">
</div>
</form>
</div>
<input class="form-control output" type="text" value=" <?php echo $num." : ".$res; ?>" aria-label="readonly input example" readonly>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>