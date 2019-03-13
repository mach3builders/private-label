<?php

namespace Mach3builders\PrivateLabel\Tests;

use Mach3builders\PrivateLabel\Facades\PrivateLabel;


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
