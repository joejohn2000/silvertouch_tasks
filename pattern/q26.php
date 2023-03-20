
<!DOCTYPE html>
<html>
<body>
<?php
$row=3;
$a=1;
    for($i=0;$i<$row;$i++)
    {
        for( $j=0;$j<=$i;$j++)
        {
            
            echo "$a";
            $a=$a+2;
            echo "&nbsp;&nbsp;";
        }
     
        echo "<br>";
        
    }



?>
</body>
</html>