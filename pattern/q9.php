



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
        for($j=0;$j<=$i;$j++)
                     {
                        if( $i==$row-1 || $i==$j ||$j==0 )
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