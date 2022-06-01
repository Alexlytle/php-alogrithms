<?php

function isValid($s){

    
    /*
        
    */
    $parentheses = [
        "(" => ")",
        "[" => "]",
        "{" => "}",
    ];
    $stack = [];
    for($i = 0; $i < strlen($s); $i++) {
        if ($parentheses[$s[$i]]??"") {
            array_push($stack, $s[$i]);
        } else {
            $parenthesis = array_pop($stack);
    
            if ($s[$i] != $parentheses[$parenthesis]) {
                return false;
            }
        }
    }
}

isValid("()[]{}");