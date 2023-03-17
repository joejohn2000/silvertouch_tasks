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
<title>p26</title>
</head>
<body>

<form method="post" > 
<div id = "frm" class="d-grid gap-2"> 
<label  class="form-label">Enter  string:</label>
  
<input type="string"class="form-control" name="string" />


<label  class="form-label">Enter Number:</label>
  
<input type="number"class="form-control" name="number" />

<input  type="submit"class="btn btn-primary" name="submit" value="submit"> 
</div>  
</form> 

<?php  
    if(isset($_POST['submit']))  
    {  
        $s = $_POST['string']; 
        $n = $_POST['number']; 
        function test($s, $n) 
          {
              $result = "";
              for ($i = 0; $i < $n; $i++)
                      {
                          $result = $result.$s;
                      }
                      return $result;
           }
        
        

        
          $length = strlen($s);
          
        if($length<3)
        {
            
            echo test($s,$n);
            
            
        }
        else
        {
            $string1=substr($s,0,3);
            echo test($string1,$n);
            
        }
          
        
           
          
          
        }
          
        
        
       
?>  











<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>