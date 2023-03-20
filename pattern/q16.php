

<!DOCTYPE html>
<html>
<body>
<?php
$row=10;


 


    for($i=1;$i<=$row;$i++)  
    {  
        for( $j=$i; $j<$row; $j++)  
        {  
            echo "&nbsp;&nbsp;";  
        }  
        for($j=1; $j<=(2*$i-1); $j++) 
        { 
            
            if($j==1 || $i==$row ||$j==(2*$i-1) )  
                echo "*";  
            else  
                echo "&nbsp;&nbsp;"; 
          
          
        }  
         
      
        echo "<br>";  
     }  
         






?>
</body>
</html>