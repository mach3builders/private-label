<?php

namespace Mach3builders\PrivateLabel\Tests;

use Illuminate\Database\Eloquent\Model;
use Mach3builders\PrivateLabel\PrivateLabel;

class LabelTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        PrivateLabel::create([
            'name' => 'Testing name',
            'domain' => 'http://domain.test',
            'email' => 'Testing email',
            'logo' => 'Testing logo',
            'favicon' => 'Testing favicon',
        ]);
    }

    public function test_method_1()
    {
        $this->assertEquals('Testing name', private_label('name'));
        $this->assertEquals('http://domain.test', private_label('domain'));
        $this->assertEquals('Testing email', private_label('email'));
        $this->assertEquals('Testing logo', private_label('logo'));
        $this->assertEquals('Testing favicon', private_label('favicon'));
    }

    public function test_method_2()
    {
        $this->assertEquals('Testing name', private_label()->name);
        $this->assertEquals('http://domain.test', private_label()->domain);
        $this->assertEquals('Testing email', private_label()->email);
        $this->assertEquals('Testing logo', private_label()->logo);
        $this->assertEquals('Testing favicon', private_label()->favicon);
    }
}

