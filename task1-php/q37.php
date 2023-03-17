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
<title>p37</title>
</head>
<body>

<form method="post" > 
<div id = "frm" class="d-grid gap-2"> 
<input name='array[]' class="form-control" placeholder='Enter element'>
<input name='array[]' class="form-control" placeholder='Enter element'>
<input name='array[]' class="form-control" placeholder='Enter element'>
<input name='array[]' class="form-control" placeholder='Enter element'>
<input name='array[]' class="form-control" placeholder='Enter element'>


<input  type="submit"class="btn btn-primary" name="submit" value="submit"> 
</div>  
</form> 

<?php  
    if(isset($_POST['submit']))  
    {
        $array = $_POST['array'];  
        

       
        function test($array)
        {
                $ctr = 0;
                    for ($i = 0; $i < sizeof($array) - 1; $i++)
                    {
                        if (($array[$i]==5) && ($array[$i + 1]==5) || ($array[$i + 1]==6)) $ctr++;
                    }
                    return $ctr;
        }

        foreach($array as $arr):
            
            $xyz=(test($array));
        endforeach;

        
       echo ($xyz);

              


}  
?>  




<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>