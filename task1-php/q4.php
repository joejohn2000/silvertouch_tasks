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
<title>pp42</title>
</head>
<body>

<form method="post" > 
<div id = "frm" class="d-grid gap-2"> 
<label  class="form-label">Enter  NO:</label>
  
<input type="number"class="form-control" name="number1" />

 
<input  type="submit"class="btn btn-primary" name="submit" value="Submit"> 
</div>  
</form> 

<?php  
    if(isset($_POST['submit']))  
    {
          
        $x = $_POST['number1'];  
        
        function test($x) 
        {
        if(abs($x - 100) <= 10 || abs($x - 200) <= 10)
                    return true;
            return false;
        }
                
        var_dump(test($x));
        
         
    }  
?>  











<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>