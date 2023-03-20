<?php
function test($array, $len)
    { 
        $ctr = 0;

        for ( $i = 0;  $i < sizeof($array);  $i++)
            {
                if (strlen($array[$i]) ==  $len)  $ctr++;
            }
            return  $ctr;
    }
    

echo test(["a", "b", "bb", "c", "ccc"], 1). "<br>";;
?>