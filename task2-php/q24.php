



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
<title>p24</title>
</head>
<body>





<div class="alert alert-warning alert-dismissible fade show output" role="alert">
  <strong><center> 
  <?php
$array = array("bmw","jeep","dastun","ferrari","Honda");
$temp_array = implode(',', $array);
$new_array = array_map('strlen', $array);
 
echo $temp_array."<br>". "The shortest array length is ". min($new_array)."<br>". 
" The longest array length is " . max($new_array).'.'; 
?>

</center></strong> 
  
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>