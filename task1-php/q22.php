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
<title>p22</title>
</head>
<body>

<form method="post" > 
<div id = "frm" class="d-grid gap-2"> 
<label  class="form-label">Enter  String:</label>
  
<input type="string"class="form-control" name="string1" />

 
<input  type="submit"class="btn btn-primary" name="submit" value="Submit"> 
</div>  
</form> 

<?php

    if(isset($_POST['submit']))  
    {  
        $s = $_POST['string1'];  
       
        function test($s) 
        {
           $ctr = 0;
        
                    for ($i = 0; $i < strlen($s); $i++)
                    {
                        if (substr($s, $i, 1) == 'z')
                        {
                            $ctr++;
                        }
                    }
        
                    return $ctr > 1 && $ctr < 4;
        }
        var_dump(test($s));
            
            
     }
        
    

?>







<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>

