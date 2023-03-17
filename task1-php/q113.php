
<?php
function test($array)
{ 
    $cnt3=0;
    $cnt5=0;
    if(sizeof($array)>=1)
    {
        for ($i = 0; $i < sizeof($array); $i++)
        {
            if ($array[$i] == 3)
                $cnt3++;
            if ($array[$i] == 5)
                $cnt5++;    
         
        }
        if($cnt3>=$cnt5)
        {
            return true;
        }
        else 
        return false; 
    }
    else 
        return 0;
}   

   

echo "Sum of the numbers of the said array except those numbers starting with 5 followed by atleast one 6 :". "<br>";;
echo var_dump(test([ 1, 5, 6, 9, 3, 3    ])). "<br>";
echo var_dump(test([1, 5, 5, 5, 10, 17   ])). "<br>";

echo var_dump(test([ 1, 3, 3, 5, 5, 5  ])). "<br>";



?>
