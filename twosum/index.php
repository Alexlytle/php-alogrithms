<?php

function twoSum($nums,$target){

    $output = [];
    for ($i=0; $i <count($nums) ; $i++) { 
     
            $num = $nums[$i];
            $wanted = $target - $num;

            if($output[$wanted]??'' !== null){
                return [$output[$wanted]??'',$i];
            }else{
                $output[$num] = $i;
            }
        
    


    }

}

print_r(twoSum([4,8,2],6));