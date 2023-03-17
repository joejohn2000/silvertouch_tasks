
<?php
function test($array)
{ 
    $sum=0;
    if(sizeof($array)>=1)
    {
        for ($i = 0; $i < sizeof($array); $i++)
        {
            if ($array[$i] == 5 and $array[$i + 1] == 6)
                $i++;
            else
                $sum+=$array[$i];
        }
        return $sum;
    }
    else 
        return 0;
}   

   

echo "Sum of the numbers of the said array except those numbers starting with 5 followed by atleast one 6 :";
echo (test([ 1, 5, 7, 9, 10, 17   ])). "<br>";
echo (test([ 1, 5, 6, 9, 10, 17    ])). "<br>";
echo (test([ 5, 6, 7, 9, 10, 17, 1  ])). "<br>";
echo (test([ 11, 9, 10, 17, 5, 6  ])). "<br>";



?>
