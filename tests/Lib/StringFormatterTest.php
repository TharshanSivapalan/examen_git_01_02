<?php

namespace tests\lib;

use Lib\StringFormatter;

class StringFormatterTest extends \PHPUnit_Framework_TestCase
{
    public function testConcatStringSuccess()
    {
        $myString = new StringFormatter();
        $result = $myString->concatString("au", "revoir");

        $this->assertEquals("aurevoir",$result);
    }

    public function testConcatStringError()
    {
     
    



    }

    public function testToCamelCase()
    {
        $myString = new StringFormatter();
        $result = $myString->toCamelCase("au", "revoir");

        $this->assertEquals("aurevoir", $result);
    }
}