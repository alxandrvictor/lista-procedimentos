<?php
 
 
function transcelsius($tf)
{  
    $c= ($tf-32)*(5/9); 
    return $c;
}
 $c= transcelsius(90);
print "$c";
