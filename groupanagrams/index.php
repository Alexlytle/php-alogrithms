<?php

/*
Group anagrams
 def: anagram is the same word phrase or word that when its letters are rearranged
 1. Sort the words so its a guaranteed order
 2. With this guaranteed order we can push the values into a hashtable
    if the key exist create a new array pushing the orginal value not the sorted value
 3. if the key dosen't exist add the new value to the array 

*/


$inputArray = ["eat", "tea", "tan", "ate", "nat", "bat"];
$output = [];
foreach ($inputArray as $input){
    $arr = str_split($input);
    sort($arr);
    $key =  implode('', $arr);

    if ($output[$key]??"") {
        $output[$key][] = $input;
    } else {
        $output[$key] = [$input];
    }
}
echo '<pre>';
    print_r($output);
echo '</pre>';