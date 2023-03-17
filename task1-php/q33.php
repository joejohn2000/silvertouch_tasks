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
<title>p33</title>
</head>
<body>

<form method="post" > 
<div id = "frm" class="d-grid gap-2"> 
<input name='array[]' class="form-control" placeholder='Enter element'>
<input name='array[]' class="form-control" placeholder='Enter element'>
<input name='array[]' class="form-control" placeholder='Enter element'>
<input name='array[]' class="form-control" placeholder='Enter element'>
<input name='array[]' class="form-control" placeholder='Enter element'>


<label  class="form-label">Enter  NO:</label>
  
<input type="number"class="form-control" name="number" /><br><br>  
<input  type="submit"class="btn btn-primary" name="submit" value="submit"> 
</div>  
</form> 

<?php  
    if(isset($_POST['submit']))  
    {
        $array = $_POST['array'];  
        
        $number = $_POST['number'];  

       
        function test($array, $number)
        {
            return sizeof($array) < 4 ? in_array($number, $array) : in_array($number, array_slice($array, 0, 4));
        }

        foreach($array as $arr):
            
            $xyz=(test($array, $number));
        endforeach;

        
        var_dump($xyz);

       


        

        
        
                


}  
?>  











<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>