<!DOCTYPE html>
<html>
<body>
<?php
$row=10;
  


    for ( $i = 1; $i <=$row; $i++)
    {
        for ($j = 1; $j <=$row-$i; $j++)
        {
            echo "&nbsp;&nbsp;";
        }
         
         for ( $j = 1; $j <=$row; $j++)
        {

            if($i==1 || $i==$row || $j==1 || $j==$row )
            {
                echo "*";
            }
            else{
                echo "&nbsp;&nbsp;";
            }
    
        } 
        echo "<br>";
    }

?>
</body>
</html>








            