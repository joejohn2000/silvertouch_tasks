

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
<title>p45</title>
</head>
<body>

<form method="post" > 
<div id = "frm" class="d-grid gap-2"> 
<label  class="form-label">Enter  string1:</label>
  
<input type="string"class="form-control" name="string1" />



<input  type="submit"class="btn btn-primary" name="submit" value="submit"> 
</div>  
</form> 

<?php  
    if(isset($_POST['submit']))  
    {  
        $s = $_POST['string1'];  
      
        

        
        function test($s)
        {
            if ((substr($s,0,1)=="F") && (substr($s,strlen($s)-1,1) =="B"))
                    {
                        return "FizzBuzz";
                    }
                    else if (substr($s,0,1) == "F")
                    {
                        return "Fizz";
                    }
                    else if (substr($s,strlen($s)-1,1) =="B")
                    {
                        return "Buzz";
                    }
                    else
                    {
                        return $s;
                    }
        }

    echo (test( $s));
            
          
          
    }
        
       
?>  





