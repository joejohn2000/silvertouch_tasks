<!DOCTYPE html>
<html>
<body>
<?php
$row=10;


 

 
     for($i=1; $i<=$row; $i++)
     {
         for($j=1; $j<$i; $j++)
         {
            echo "&nbsp;&nbsp;"; 
         }
         
 
         for($j=1; $j<=($row*2 -(2*$i-1)); $j++)
         {
            echo "*"; 
         }
 
         echo "<br>";
     }
 






?>
</body>
</html>