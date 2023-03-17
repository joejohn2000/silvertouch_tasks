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
<title>p48</title>
</head>
<body>

<form method="post" > 
<div id = "frm" class="d-grid gap-2"> 
<label class="form-label">Enter First NO:</label>
  
<input type="number"class="form-control" name="number1" />

<label  class="form-label">Enter Second NO:</label>
  
<input type="number"class="form-control" name="number2" />

<label class="form-label">Enter Third NO:</label>
  
<input type="number"class="form-control" name="number3" />

<br><br>

<select name="value" id="value">
    <option value=1>True</option>
    <option value=0>False</option>
  
  </select>



<input  type="submit"class="btn btn-primary" name="submit" value="submit"> 
</div>  
</form> 

<?php  
    if(isset($_POST['submit']))  
    {  
        $x = $_POST['number1'];  
        $y = $_POST['number2'];  
        $z = $_POST['number3']; 
        $flag= $_POST['value'];  
        settype($flag, 'boolean');
        function test($x, $y, $z, $flag)
        {
            return $flag ? $x <= $y && $y <= $z : $x < $y && $y < $z;
        }
        var_dump(test($x, $y, $z, $flag));
    }  
?>  











<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>