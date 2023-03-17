



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
<title>p17</title>
</head>
<body>
<?php
function test($x, $y)
  {
    $a = explode(' ',trim($x));
    $b = explode(' ',trim($y));
    foreach($a as $key=>$value){
        $output[$key] = $a[$key]*$b[$key];
    }
    return implode(' ',$output);
}

?>

<input class="form-control output" type="text" value=" <?php echo test(("20 12 5"), ("1 3 3")); ?>" aria-label="readonly input example" readonly>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>