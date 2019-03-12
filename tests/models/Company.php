<?php
namespace Mach3builders\PrivateLabel\Tests\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $attributes = [
        'name' => 'Jasper',
    ];
}
