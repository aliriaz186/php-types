<?php
declare(strict_types=1);

namespace jsys\types;
use PHPUnit\Framework\TestCase;


class IsEmptyTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function test_must_not_initialize_with_non_empty_string()
    {
        $testString = 'hello';
        $this->expectExceptionCode(1021);
        $this->expectExceptionMessage("Non empty '$testString' is not Allowed");
        $nonWhiteString = new \jsys\types\Text($testString);
    }
    public function test_must_initialize_with_empty_string()
    {
        $testString = "";
        $nonEmptyString = new \jsys\types\Text($testString);
        $this->assertInstanceOf('jsys\types\Text', $nonEmptyString);
        $this->assertEquals('jsys\types\Text', get_class($nonEmptyString));
        $this->assertEquals($nonEmptyString->getStr(), $testString, 'Both must get the same value');
    }



    public function tearDown(): void
    {
    }
}