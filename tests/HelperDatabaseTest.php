<?php

namespace Mach3builders\PrivateLabel\Tests;

use Mach3builders\PrivateLabel\PrivateLabel;

class HelperDatabaseTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        PrivateLabel::create([
            'relation_id' => 1,
            'name' => 'Testing name',
            'domain' => 'http://domain.test',
            'email' => 'Testing email',
            'logo' => 'Testing logo',
            'favicon' => 'Testing favicon',
        ]);
    }

    public function test_repository_get_default()
    {
        $this->assertEquals('Testing name', private_label()->get('name'));
        $this->assertEquals('http://domain.test', private_label()->get('domain'));
        $this->assertEquals('Testing email', private_label()->get('email'));
        $this->assertEquals('Testing logo', private_label()->get('logo'));
        $this->assertEquals('Testing favicon', private_label()->get('favicon'));
    }

    public function test_repository_get_quick()
    {
        $this->assertEquals('Testing name', private_label('name'));
        $this->assertEquals('http://domain.test', private_label('domain'));
        $this->assertEquals('Testing email', private_label('email'));
        $this->assertEquals('Testing logo', private_label('logo'));
        $this->assertEquals('Testing favicon', private_label('favicon'));
    }

    public function test_repository_has_only_checks_db()
    {
        $this->assertEquals(true, private_label()->has('name'));
        $this->assertEquals(true, private_label()->has('domain'));
        $this->assertEquals(true, private_label()->has('email'));
        $this->assertEquals(true, private_label()->has('logo'));
        $this->assertEquals(true, private_label()->has('favicon'));
    }
}
