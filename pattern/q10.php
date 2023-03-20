
<!DOCTYPE html>
<html>
<body>
<?php
$size=10;



   


        



       
        
            for($i=1; $i<=$size; $i++)
            {
                for($j=1; $j<$i; $j++)
                {
                    echo "&nbsp;&nbsp;";
                }
                
        
                for($j=$size; $j>=$i; $j--)
                {
                     if( $j == $i || $j==$size ||$i==1 )
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