<?php

namespace Mach3builders\PrivateLabel\Tests;

class DefaultTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function test_method_1()
    {
        $this->assertEquals('Mach3builders', private_label('name'));
    }

    public function test_method_2()
    {
        $this->assertEquals('Mach3builders', private_label()->name);
    }

}
