
<!DOCTYPE html>
<html>
<body>
<?php

$row=10;


    for ($i = $row; $i > 0; $i--)
    {
        if ($i == 1 || $i == $row)
        {
            for ($j = 1; $j <= $i; $j++)
            {
                echo "*";
            }
        }
        else
        {
            for ($j = 1; $j <= $i; $j++)
            {
               
                    echo "*";
                }
                
            
        }
        echo "<br>";
    }

?>
</body>
</html>
