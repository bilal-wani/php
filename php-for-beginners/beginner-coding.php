<?php 

/**
 * Create fibonacci series to print given number of entries. 
 */

 function prinFibonacci($count){
    $prev = 0;
    $next = 1;
    echo "0,"; 
    $next = 1;
    for($i=0; $i< $count; $i++){
        echo $next . ",";
        $temp = $next;
        $next += $prev;
        $prev = $temp;
      
    }
 }