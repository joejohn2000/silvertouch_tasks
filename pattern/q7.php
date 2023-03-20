
<!DOCTYPE html>
<html>
<body>
<?php
$row=10;




            for ($i = 0; $i < $row; $i++)
    {
        for ($j = 0; $j < ($row - $i); $j++)
        {
            echo "&nbsp;&nbsp;"; 
        }
        for ($j = 0; $j < $i; $j++)
        {
            echo "*";
        }
        echo "<br>";
    }

?>
</body>
</html>