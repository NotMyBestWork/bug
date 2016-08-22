<?php

require 'C:\phpstormProjects\site_test\Calculator.php';

/**
 * Created by PhpStorm.
 * User: jetbrains
 * Date: 8/12/2016
 * Time: 10:34 AM
 * custom line modified
 */

/**
 * @runTestsInSeparateProcesses
 */
class CalculatorTest extends PHPUnit_Framework_TestCase
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

        public function testAdd()
        {
            $result = $this->calculator->add(1, 2);
            $this->assertEquals(3, $result);
        }

}
