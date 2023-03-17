
<?php
function test($array)
 { 
    $sum=0;
    if(sizeof($array)>=1)
    {
        for ($i = 0; $i < sizeof($array); $i++)
        {
            if($array[$i]!=17)
            {
                $sum= $array[$i]+$sum;
            }
        }
        return $sum;

    }
    else 
    {
        return 0;
    }
    
 }   
echo "Sum of values in the array of integers except the number 17: ";
echo (test([ 1, 5, 7, 9, 10, 17 ])). "<br>";



?>
