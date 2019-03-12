<?php

namespace Mach3builders\PrivateLabel;

use Illuminate\Database\Eloquent\Model;

class PrivateLabel extends Model
{
    protected $fillable = [
        'name',
        'domain',
        'email',
        'logo',
        'favicon'
    ];

    public static function getByDomain()
    {
        return self::firstOrNew(['domain' => $_SERVER['HTTP_HOST']], config('private-label.default'));
    }
}
