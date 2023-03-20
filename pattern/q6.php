
<!DOCTYPE html>
<html>
<body>
<?php
$size=5;


    for ($i = 0; $i < $size; $i++)
    {
        for ($j = 0; $j < $size; $j++)
        {
             if($i>=$j )
            {
                echo "*";       
            }
            else
            {
                echo "&nbsp;";   
            }
        }
        echo "<br>"; 
    }



?>
</body>
</html>