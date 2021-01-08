<?php
header('Content-type:text/plain');
$allthestates="Mississippi Alabama Texas Massachusetts Kansas Tuxas";
$statearray=[];
$state1=explode(' ',$allthestates);
$i=0;
foreach($state1 as $state)
{
    if(preg_match('/xas$/',($state)))
    {
      $statearray[$i]=($state);
        $i=$i+1;
        print"\nThe states that ends in xas:".$state;
        
        
    }
}
foreach($state1 as $state)
{
    if(preg_match('/^K.*s$/i',($state)))
    {
        $statearray[$i]=($state);
        $i=$i+1;
        echo "\nThe state that begin with k and ends with s:".$state;
    }
}
foreach($state1 as $state)
{
    if(preg_match('/^M.*s$/',($state)))
    {
        $statearray[$i]=($state);
        $i=$i+1;
        echo "\nThe state that begin with M and ends with s:".$state;
    }
}
foreach($state1 as $state)
{
    if(preg_match('/a$/',($state)))
    {
        $statearray[$i]=($state);
        $i=$i+1;
        echo "\nThe state that ends in a:".$state;
    }
}
foreach($statearray as $element=>$value)
{
    print("\n".$value." is the element: ".$element);
}
?>