

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
<title>p76</title>
</head>
<body>

<form method="post" > 
<div id = "frm" class="d-grid gap-2"> 
<label  class="form-label">Enter  string1:</label>
  
<input type="string"class="form-control" name="string1" />

<label  class="form-label">Enter  string2:</label>
  
<input type="string"class="form-control" name="string2" />



<input  type="submit"class="btn btn-primary" name="submit" value="submit"> 
</div>  
</form> 

<?php  
    if(isset($_POST['submit']))  
    {  
        
        $string1 = $_POST['string1'];
        $string2 = $_POST['string2'];  
      
        function test($string1, $string2)
        { 
             $lastChars = "";

            if (strlen($string1) > 0)
            {
                $lastChars = $lastChars.substr($string1, 0, 1);
            }
            else
            {
                $lastChars = $lastChars."#";
            }

            if (strlen($string2) > 0)
            {
                $lastChars = $lastChars.substr($string2, strlen($string2) - 1);
            }
            else
            {
                $lastChars = $lastChars."#";
            }

            return $lastChars;
        }
        echo test($string1, $string2);
      
            
    }
       

        
        
    
      

      
            
          
          
    
        
       
?>  





