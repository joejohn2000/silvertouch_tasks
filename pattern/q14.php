
<!DOCTYPE html>
<html>
<body>
<?php
$row=10;
$col=10;



   


    for ($i = 0; $i <= $row; $i++)
    {
        for ($j = 0; $j <= $col; $j++)
        {
            if($i==0 || $j==0 || $j==$col || $i==$col)
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