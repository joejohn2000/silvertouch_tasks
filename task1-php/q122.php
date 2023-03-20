
<?php
function test($array,$num)
{ 

    for ($i = 0; $i < sizeof($array) - 1; $i++)
    {
        if  ($array[$i] == $num && $array[$i+1] == $num) 
        {
            return true;
        }
    }
    return false;
}

   


echo var_dump(test([ 3, 7, 5, 5, 3, 7    ],2)). "<br>";
echo var_dump(test([ 3, 7, 5, 5, 3, 7   ],3)). "<br>";
echo var_dump(test([ 3, 7, 5, 5, 3, 7, 5 ],3)). "<br>";




?>