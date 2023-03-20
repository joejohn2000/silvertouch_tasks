
<!DOCTYPE html>
<html>
<body>
<?php
$size=5;



    for ($i= 0; $i<=$size; $i++)
    {
        for ($j = 1; $j <=$i; $j++)
        {
            echo "&nbsp;";   
        }
         
         for ( $j = 1; $j <=$size; $j++)
        {
            echo "*";
        } 
        echo "<br>"; 
    }





?>
</body>
</html>