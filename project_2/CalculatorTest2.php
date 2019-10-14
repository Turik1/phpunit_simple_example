<?php
require 'Calculator2.php';
 
class CalculatorTests extends \PHPUnit\Framework\TestCase
{
    private $calculator;
 
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }

    public function testSub()
    {
        $result = $this->calculator->sub(3, 1);
        $this->assertEquals(2, $result);
    } 
}
