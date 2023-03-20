<!DOCTYPE html>
<html>
<body>
<?php
$size=10;




    for ( $i = 1; $i <=$size; $i++)
    {
        for ($j = 1; $j <=$size-$i; $j++)
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








            