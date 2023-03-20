
<!DOCTYPE html>
<html>
<body>
<?php
$row=5;
$a=1;
    for($i=0;$i<$row;$i++)
    {
        for( $j=0;$j<=$i;$j++)
        {
            
            echo "$a";
            $a=$a+1;
            echo "&nbsp;&nbsp;";
        }
     
        echo "<br>";
        $a=$a-1;
    }



?>
</body>
</html>