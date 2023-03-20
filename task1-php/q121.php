<?php
function test($arr)
 { 

     $flag = true;

        for ($i = 0; $i < sizeof($arr); $i++)
            {
                if ($arr[$i] == 5)
                {
                    if (($i > 0 && $arr[$i - 1] == 5) || ($i < sizeof($arr)- 1 && $arr[$i + 1] == 5)) $flag = true;
                    else if ($i == sizeof($arr) - 1) $flag = false;
                    else return false;
                }
            }
            return $flag;
 }   

   


echo var_dump(test([ 3, 5, 5, 3, 7    ])). "<br>";
echo var_dump(test([ 3, 5, 5, 4, 1, 5, 7 ])). "<br>";
echo var_dump(test([ 3, 5, 5, 5, 5, 5 ])). "<br>";
echo var_dump(test([ 2, 4, 5, 5, 6, 7, 5 ])). "<br>";



?>