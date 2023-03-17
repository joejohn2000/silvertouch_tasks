


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
<title>p16</title>
</head>
<body>
<?php
$num = $_POST['num'];
function test($num) 
{
    $digits_sum = 0;
    for ($i = 0; $i < strlen($num); $i++) 
    {
        $digits_sum += $num[$i];
    }
    return $digits_sum;
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
<input class="form-control output" type="text" value=" <?php echo test($num); ?>" aria-label="readonly input example" readonly>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>