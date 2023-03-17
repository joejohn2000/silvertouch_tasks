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
<title>p56</title>
</head>
<body>

<form method="post" > 
<div id = "frm" class="d-grid gap-2"> 
<label class="form-label">1st NO:</label>
  
<input type="number"class="form-control" name="number1" />

<label  class="form-label"> 2ed NO:</label>
  
<input type="number"class="form-control" name="number2" />

<label class="form-label">3rd NO:</label>
  
<input type="number"class="form-control" name="number3" />


<input  type="submit"class="btn btn-primary" name="submit" value="submit"> 
</div>  
</form> 

<?php  
    if(isset($_POST['submit']))  
    {  
        $x = $_POST['number1'];  
        $y = $_POST['number2'];  
        $z = $_POST['number3'];
        function test($x,$y,$z)
        {
           
                return crt($x)+crt($y)+crt($z);


        }
        function crt($n)
        {
            if (($n < 13 && $n >= 10 ) || ($n > 13 && $n < 17 ) || ($n > 17 && $n <= 20 )) 
            {
                return 0;
            } 
            else 
            {
                return $n;
            } 
        }


        echo(test($x,$y,$z));




    }   
?>  











<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>