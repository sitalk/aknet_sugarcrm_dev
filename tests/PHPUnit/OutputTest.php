<?php
require_once 'PHPUnit/PHPUnit/Extensions/OutputTestCase.php';
 
class OutputTest extends PHPUnit_Extensions_OutputTestCase
{
    public function testExpectFooActualFoo()
    {
        $this->expectOutputString('foo');
        print 'foo';
    }
 
    public function testExpectFooActualBar()
    {
        $this->expectOutputString('foo');
        print 'bar';
    }
}
?>