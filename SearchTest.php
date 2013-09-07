<?php
require_once 'Search.php';
class SearchTest extends PHPUnit_Framework_TestCase
{
    function __construct(){
        $this->finder  = new Search;
        $this->testArray = array('Carl', 'Louis', 'Parrish');

    }
    
    public function testFirstLevelMatch(){
        $this->assertTrue($this->finder->my_in_array('Carl',$this->testArray));
    }
    

    
}