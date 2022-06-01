<?php

function firstUniqChar($s) {
        
    /*
    1. Hashtable 
        a.If the value exist add 1 to the key 
        b.Else, create a new key and add 1
        [
            a:2,
            r:1,
            o:n,
            n:1
        ]
    2. Look up
        a.Loop through all the characters 
        b.Find the key that equals 1 return the index if not found return -1
    */
    $ht = [];
    for ($i=0; $i <strlen($s) ; $i++) { 
        $char = $s[$i];
        if($ht[$char]??""){
            $ht[$char]++;
        }else{
            $ht[$char] = 1;
        }    
    }

    for ($i=0; $i < strlen($s); $i++) { 
        $char = $s[$i];
        if($ht[$char] ==1){
            return  $i;
        }
    }

    return  -1;

}

echo firstUniqChar('aaron');