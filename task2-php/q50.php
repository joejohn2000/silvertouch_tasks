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
<title>p50</title>
</head>
<body>
<?php
$str1=$_POST['str1'];
$str2=$_POST['str2'];

if (substr($str1, 0, strlen($str2)) == $str2) 
{
 $str1 = substr($str1, strlen($str2));
}



?>

<div id = "frm">
<form  method = "POST">  
<div class="mb-3">
<input type="text" class="form-control"  name="str1" placeholder="enter text">
<input type="text" class="form-control"  name="str2" placeholder="enter substring to remove">
<input type="submit" class="btn btn-warning form-control" value="Submit ">
</div>
</form>
</div>
<input class="form-control output" type="text" value=" <?php echo $str1."\n"; ?>" aria-label="readonly input example" readonly>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>