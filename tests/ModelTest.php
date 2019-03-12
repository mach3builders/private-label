<?php

namespace Mach3builders\PrivateLabel\Tests;

use Mach3builders\PrivateLabel\PrivateLabel;

class ModelTest extends TestCase
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

    public function test_model_has_relation()
    {
        $private_label = PrivateLabel::first();
        dd($private_label->relation());
    }
}
