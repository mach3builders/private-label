<?php

namespace Mach3builders\PrivateLabel\Tests\Models;

use Mach3builders\PrivateLabel\PrivateLabel;

class Label extends PrivateLabel
{
    protected $fillable = [
        'company_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
