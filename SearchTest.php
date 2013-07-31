<?php
require_once 'Search.php';
class SearchTest extends PHPUnit_Framework_TestCase
{
    $finder  = new Search;
    $testArray = array('Carl', 'Louis', 'Parrish');
    $this->assertEquals(True, $this->finder->my_in_array($testArray, 'Carl'));
    
    
}