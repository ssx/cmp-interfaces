<?php

use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public function testAreTwoNumbersEqual(): void
    {
        $this->assertEquals(
            200,
            200
        );
    }
}
