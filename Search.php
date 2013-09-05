<?php
/**
* Duplicate the functionality of in_array()
* @category Utility
* @package Design Patterns
* @copyright Copyright (c)  Carl Parrish 2013
* @author Carl Parrish
*
**/

class Search
{
    public function my_in_array($array, $value, $match = false)
    {
        foreach ($array as $index){
        if (is_array($index)) {
           $result = my_in_array($index, $value, &$match);
        }elseif ($index === $value){
            $match = true;
        } 
        
    }

 return $match;
    }
}

?>