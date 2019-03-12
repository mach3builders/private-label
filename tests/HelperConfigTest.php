<?php

namespace Mach3builders\PrivateLabel\Tests;

use Mach3builders\PrivateLabel\Repository;

class HelperConfigTest extends TestCase
{
    public function test_repository_get_default()
    {
        $this->assertEquals('Mach3builders', private_label()->get('name'));
    }

    public function test_repository_has_only_checks_db()
    {
        $this->assertEquals(false, private_label()->has('name'));
    }
}
