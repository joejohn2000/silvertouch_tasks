



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
<title>p28</title>
</head>
<body>





<div class="alert alert-warning alert-dismissible fade show output" role="alert">
  <strong><center> 
 
  <?php
function test($x, $y)
   { 
      $union=  array_merge(array_intersect($x, $y),array_diff($x, $y), array_diff($y, $x));
        return $union;
   }
$p = array(1, 2, 3, 4);
$r = array(2, 3, 4, 5, 6,);
print_r(test($p, $r));
?>

</center></strong> 
  
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>