
<!DOCTYPE html>
<html>
<body>
<?php
$row=10;

 

    for($i=1;$i<=2*$row;$i++) 
    {
         $col =$i>$row ? 2*$row-$i: $i;
        for( $j=1;$j<$col;$j++)
        {
            echo "*"; 
        }
        echo "<br>";
    }







?>
</body>
</html>