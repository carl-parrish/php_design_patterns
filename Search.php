<?php

class Search.php()
{
    function in_array($array, $value, $match = false)
    {
        foreach ($array as $index){
        if (is_array($index)) {
           $result = in_array($index, $value, &$match);
        }elseif ($index === $value){
            $match = true;
        } 
        
    }

 return $match;
    }
}

?>