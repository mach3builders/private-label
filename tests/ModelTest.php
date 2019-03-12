<?php

namespace Mach3builders\PrivateLabel\Tests;

use Mach3builders\PrivateLabel\PrivateLabel;

class ModelTest extends TestCase
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

    public function test_relation_property()
    {
        $label = private_label('company');

        dd($label);
    }
}
