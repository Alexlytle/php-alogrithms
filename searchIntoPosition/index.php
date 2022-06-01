<?php


function searchInsert($nums,$target){


/*
   1. create a low and high pointer
    lo        hi
    [1, 3, 5, 6]
    
   2. find the mid pointer index which will be (hi+lo)/2 = 1.5 ->round down 1
    lo  mid   hi
    [1, 3, 5, 6]
    
   3. move pointers left or right depending on the target value 
   if the target value is greater move right
    else target value is less move left 

   4.let the pointers cross becuase if the number does not exisit we want where the number should be 
    
   target = 2
   target 2>mid 3 
    
    lo  mid   hi
    [1, 3, 5, 6]
           
*/
    $lo = 0;
    $high = count($nums);
    
    while($lo<=$high){
        $mid = floor(($high+$lo)/2);

        $midPointer = $nums[$mid]??'';

        if($target>$midPointer){
            $lo = $mid + 1;
        }else{
            $high = $mid -1;
        }
    }
    return $lo;

}

print_r(searchInsert([1,3,5,6],2));