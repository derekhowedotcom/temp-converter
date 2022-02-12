<?php

use PHPUnit\Framework\TestCase;

require 'temp-con-raw-php.php';
 
class tempConTest extends TestCase
{
    private $tempConverter;
 
    protected function setUp(): void
    {
        $this->tempConverter = new TempConverter();
    }
 
    protected function tearDown(): void
    {
        $this->tempConverter = null;
    }
 
    public function testClacFahrenheit()
    {
        $result = $this->tempConverter->clacFahrenheit(32.5);
        $this->assertEquals(90.5, $result);
    }

    public function testClacCelsius()
    {
        $result = $this->tempConverter->clacCelsius(68);
        $this->assertEquals(20, $result);
    }
 
}




?>