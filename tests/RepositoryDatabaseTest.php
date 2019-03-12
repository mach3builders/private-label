<?php

namespace Mach3builders\PrivateLabel\Tests;

use Mach3builders\PrivateLabel\Repository;
use Mach3builders\PrivateLabel\PrivateLabel;

class RepositoryDatabaseTest extends TestCase
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
        $this->assertEquals('Testing name', (new Repository)->get('name'));
        $this->assertEquals('http://domain.test', (new Repository)->get('domain'));
        $this->assertEquals('Testing email', (new Repository)->get('email'));
        $this->assertEquals('Testing logo', (new Repository)->get('logo'));
        $this->assertEquals('Testing favicon', (new Repository)->get('favicon'));
    }

    public function test_repository_has_only_checks_db()
    {
        $this->assertEquals(true, (new Repository)->has('name'));
        $this->assertEquals(true, (new Repository)->has('domain'));
        $this->assertEquals(true, (new Repository)->has('email'));
        $this->assertEquals(true, (new Repository)->has('logo'));
        $this->assertEquals(true, (new Repository)->has('favicon'));
    }
}
