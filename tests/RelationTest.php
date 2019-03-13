<?php

namespace Mach3builders\PrivateLabel\Tests;

use Mach3builders\PrivateLabel\PrivateLabel;
use Mach3builders\PrivateLabel\Tests\Models\Label;
use Mach3builders\PrivateLabel\Tests\Models\Company;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class RelationTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->company = Company::create(['name' => 'Jaspers Bedrijf']);

        Label::create([
            'company_id' => 1,
            'domain' => 'http://domain.test',
        ]);
    }

    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);

        $app['config']->set('private-label.model', Label::class);
    }

    public function test_model_is_set_to_conf_model()
    {
        $this->assertInstanceOf(Label::class, private_label());
    }

    public function test_model_relation_is_instance_of_has_one()
    {
        $this->assertInstanceOf(BelongsTo::class, private_label()->company());
    }

    public function test_model_relation()
    {
        $this->assertEquals($this->company->name, private_label()->company->name);
    }
}

