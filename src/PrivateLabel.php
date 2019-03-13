<?php

namespace Mach3builders\PrivateLabel;

use Illuminate\Database\Eloquent\Model;

class PrivateLabel extends Model
{
    /**
     * The mass assignable properties
     */
    protected $fillable = [
        'name',
        'domain',
        'email',
        'logo',
        'favicon'
    ];

    /**
     * Get a private label by domain, or return a new one with the default values from the config
     *
     * @return PrivateLabel
     */
    public static function getByDomain()
    {
        return self::firstOrNew(['domain' => $_SERVER['HTTP_HOST']], config('private-label.default'));
    }
}
