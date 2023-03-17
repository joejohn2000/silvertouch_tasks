
<?php
function test($array)
 { 
    
    $first=$array[0];
    $mid=$array[(sizeof($array)-1)/2];
    $last=$array[(sizeof($array)-1)];
    if( $first > $last && $first > $mid )
    {
        return $first;
    }
    else if ( $last > $first && $last > $mid )
    {
        return $last;
    }
    else
    {
        return $mid;
    }

    
    
 }   

echo (test([ 1 ])). "<br>";
echo (test([ 1,2,9 ])). "<br>";
echo (test([ 1,2,9,3,3 ])). "<br>";
echo (test([ 1,2,3,4,5,6,7 ])). "<br>";
echo (test([ 1,2,2,3,7,8,9,10,6,5,4 ])). "<br>";



?>


