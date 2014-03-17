<?php

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function tearDown()
    {
    }

    public function testHelloWorld()
    {
        $helloWorld = new HelloWorld();

        $this->assertEquals('Hello World', $helloWorld->hello());
    }

    public function testHello()
    {
        $helloWorld = new HelloWorld();

        $this->assertEquals('Hello Bar', $helloWorld->hello('Bar'));
    }

    public function testWhat()
    {
        $helloWorld = new HelloWorld();

        $this->assertNull($helloWorld->what());

        $helloWorld->hello('Bar');

        $this->assertEquals('Bar', $helloWorld->what());
    }
}

