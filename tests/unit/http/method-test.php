<?php
namespace Jsys\Http\Test;

use Jsys\Http\Method;
use PHPUnit\Framework\TestCase;

class MethodTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function test_it_should_return_default_value_when_no_param_is_given():void
    {
        $method = new Method();
        $this->assertTrue($method, 'GET');
    }

    public function it_should_return_an_array_of_all_methods_excluding_default_when_param_is_not_set():void
    {
        $this->assertTrue();
    }

    public function it_should_return_an_array_of_all_methods_excluding_default_when_param_is_set_to_false():void
    {
        $this->assertTrue(true);
    }

    public function it_should_return_an_array_of_all_methods_including_default_when_param_is_true():void
    {
        $this->assertTrue(true);
    }

    public function tearDown(): void
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
    }
}
