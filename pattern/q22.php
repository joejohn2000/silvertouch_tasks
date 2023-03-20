
<!DOCTYPE html>
<html>
<body>
<?php
$row=10;


    $str='a';
    for($i=0;$i<$row;$i++)
    {
        for( $j=0;$j<=$i;$j++)
        {
            
            echo $str++;
            
        }
     
        echo "<br>";
    }



?>
</body>
</html>