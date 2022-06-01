<?php

function reverseString($str){
     
    $output = "";
    for ($i=strlen($str)-1; $i >=0 ; $i--) { 
           $output .= $str[$i];
    }

    return $output;
}

print_r(reverseString('hello'));