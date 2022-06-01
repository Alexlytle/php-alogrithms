<?php

function palindrome($s){

    /*
        same word spelled the same backward and forward

        use the 2 pointer method
        pointer moving from the left and a pointer moving from 
        at any time values don't match return false
    */
    $s = strtolower(preg_replace('/[^a-z0-9]/i', '', $s));
        
        if (strlen($s) === 0) {
            return true;
        }
        $array = str_split($s);
       
        $left = 0;
        $right = count($array) - 1;
        
        while ($left < $right) {
            if ($array[$left] != $array[$right]) {
                return false;
            }
            
            $left++;
            $right--;
        }
        
        return true;

}

 if(palindrome('A man, a plan, a canal: Panama') == true){
    echo 'true';
 }else{
     echo 'false';
 }