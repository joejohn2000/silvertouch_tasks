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
<title>p5</title>
</head>
<body>
<?php
$text = $_POST['name'];
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);

?>

<div id = "frm">
<form  method = "POST">  
<div class="mb-3">
  <label  class="form-label">ENTER TEXT HERE</label>
  <input type="text" class="form-control"  name="name" placeholder="your name">
  <input type="submit" class="btn btn-warning form-control" value="Submit Name">
</div>
</form>
</div>


<div class="alert alert-warning alert-dismissible fade show output" role="alert">
  <strong><center>  <?php echo $text; ?></center></strong> 
  
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>