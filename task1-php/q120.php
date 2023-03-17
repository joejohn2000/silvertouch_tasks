
<?php
function test($array)
{ 
     $flag = false;
     $cnt5 = 0;

      for ($i = 0; $i < sizeof($array); $i++)
         {
            if ($array[$i] == 5 && !$flag)
             {
                 $cnt5++;
                 $flag = true;
             }
            else
             {
                 $flag = false;
              }
           }

      return $cnt5 == 5;
}   
   


echo var_dump(test([ 3, 5, 1, 5, 3, 5, 7, 5, 1, 5    ])). "<br>";
echo var_dump(test([ 3, 5, 5, 5, 5, 5, 5])). "<br>";
echo var_dump(test([ 3, 5, 2, 5, 4, 5, 7, 5, 8, 5 ])). "<br>";
echo var_dump(test([ 2, 4, 5, 5, 5, 5 ])). "<br>";



?>
