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
<title>p32</title>
</head>
<body>
<?php
$text=$_POST['string'];
$searchchar=$_POST['chr'];
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if($text[$x]==$searchchar)
    {
    $count=$count+1;
     }
  }

?>

<div id = "frm">
<form  method = "POST">  
<div class="mb-3">
<input type="text" class="form-control"  name="string" placeholder="enter text">
<input type="text" class="form-control"  name="chr" placeholder="enter chr">
<input type="submit" class="btn btn-warning form-control" value="Submit ">
</div>
</form>
</div>
<input class="form-control output" type="text" value=" <?php echo $count; ?>" aria-label="readonly input example" readonly>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>