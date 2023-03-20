<?php
function test($array, $n)
    { 
        $arr = [sizeof($array)];

            for ($i = 0; $i < $n; $i++)
            {
                $arr[$i] = $array[$i];
            }

            return $arr;
    }
    

    print_r( test(["a", "b", "bb", "c", "ccc"], 3));

?>