
<!DOCTYPE html>
<html>
<body>
<?php
$size=10;



   


            for ($i = 0; $i <= $size; $i++)
            {
                for ($j = 0; $j <= $size; $j++)
                {
                     if($i>=$j )
                    {
                        if($j==0 ||$i==$size || $i==$j )
                    {
                        echo "*";     
                    }
                    else
                    {
                        echo "&nbsp;&nbsp;";   
                    }    
                    }
                   
                }
                echo "<br>";
            }

?>
</body>
</html>