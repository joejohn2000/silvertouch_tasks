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
<title>p51</title>
</head>
<body>

<form method="post" > 
<div id = "frm" class="d-grid gap-2"> 
<label class="form-label">Enter First NO:</label>
  
<input type="number"class="form-control" name="number1" />

<label  class="form-label">Enter Second NO:</label>
  
<input type="number"class="form-control" name="number2" />


<br><br>




<input  type="submit"class="btn btn-primary" name="submit" value="submit"> 
</div>  
</form> 

<?php  
    if(isset($_POST['submit']))  
    {  
        $x = $_POST['number1'];  
        $y = $_POST['number2'];  
 


    function test($x,$y)    
    {
        if($x==$y)
        {
            return 0;
        }
        else if($x>=$y)
        {
            if( $x % 7 == $y % 7 )
            {
                return $y;
            }
            else 
            {
                return $x;
            }
        }
        else
        {
            if( $x % 7 == $y % 7 )
            {
                return $x;
            }
            else 
            {
                return $y;
            }
        }
    }
    echo (test($x,$y));

    }  
?>  


