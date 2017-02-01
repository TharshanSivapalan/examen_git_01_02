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
        $this->assertEquals("auRevoir", $result);
    }

 	public function testPrefixIsFalseParameterSuccess()
    {
        $myString = new StringFormatter();
        $result = $myString->prefix("see", "you", false);
        $this->assertEquals("seeyou", $result);
    }

    public function testPrefixIsTrueParameterSuccess()
    {
        $myString = new StringFormatter();
        $result = $myString->prefix("good", "food", true);
        $this->assertEquals("goodFood", $result);
    }

    public function testSuffixIsFalseParameterSuccess()
    {
        $myString = new StringFormatter();
        $result = $myString->suffix("au", "revoir", false);
        $this->assertEquals("revoirau", $result);
    }

    public function testSuffixIsTrueParameterSuccess()
    {
        $myString = new StringFormatter();
        $result = $myString->suffix("au", "revoir", true);
        $this->assertEquals("revoirAu", $result);
    }
}