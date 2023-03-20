<?php
function test($n)
    { 
      while ($n > 0)
       {
          if ($n % 10 == 2) return true;
           $n /= 10;
        }
    return false;
    }

echo var_dump(test(123)). "<br>";
echo var_dump(test(13)). "<br>";
echo var_dump(test(222)). "<br>";
?>