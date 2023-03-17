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
<title>p58</title>
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
           
            if($x>$y && $x>$z && $y > $z)
            {
                return $x - $y == $y - $z;
            }
            else if($x > $y && $x > $z && $z > $y) 
            {
            return $x - $z == $z - $y;
            }
            else if($y>$x && $y>$z &&  $x > $z)
            {
                return $y - $x == $x - $z;
            }
            else if ($y > $x && $y > $z && $z > $x) 
            {
            return $y - $z == $z - $x;
            }
            else if($z>$x && $z>$y && $x > $y)
            {
                return $z - $x == $x - $y;
            }
            else
            {
                return  $z - $y == $y - $x;
            }



        }


        var_dump(test($x, $y, $z));




    }   
?>  











<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>