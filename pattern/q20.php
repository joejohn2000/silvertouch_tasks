
<!DOCTYPE html>
<html>
<body>
<?php
$row=8;
$col=10;

 

 


    for ($i = 0; $i <= $row; $i++)
    {
        for ($j = 0; $j <= $col; $j++)
        {
            if($i==$row/2||$j==$col/2)
            {
                echo "*";      
            }
            else
            {
                echo "&nbsp;&nbsp;";    
            }   
        }
        echo "<br>";
    }



?>
</body>
</html>