<?php
declare(strict_types=1);

namespace jsys\types;

use WhiteSpaceString;
use PHPUnit\Framework\TestCase;


class WhiteSpaceStringTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function test_must_not_initialize_with_non_white_space_string()
    {
        $testString = '';
        $this->expectExceptionCode(1001);
        $this->expectExceptionMessage("Given string '$testString' doesnot contain white space.");
        $nonWhiteString = new WhiteSpaceString($testString);
    }

    public function test_can_initialize_with_white_space_string_parameter()
    {
        $testString = ' ';
        $whiteSpaceString = new WhiteSpaceString($testString);
        $this->assertInstanceOf('WhiteSpaceString', $whiteSpaceString);
        $this->assertEquals('WhiteSpaceString', get_class($whiteSpaceString));
        $this->assertEquals($whiteSpaceString->value(), $testString, 'Both must get the same value');
    }

    public function tearDown(): void
    {
    }
}
