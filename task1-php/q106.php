
<?php
function test($array)
 { $cnt=0;
    
    for($i=0;$i<sizeof($array);$i++)
    {
        if ($array[$i]%2==0)
        {
            $cnt++;
        }
    }
    return $cnt;

    
    
 }   
echo "Number of even elements: ";
echo(test([ 1, 5, 7, 9, 10, 12 ])). "<br>";



?>


