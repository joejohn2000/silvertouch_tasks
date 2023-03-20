
<!DOCTYPE html>
<html>
<body>
<?php
$row=5;
$a=2;
    for($i=0;$i<$row;$i++)
    {
        for( $j=1;$j<=$i;$j++)
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