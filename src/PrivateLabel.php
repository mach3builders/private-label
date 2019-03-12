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

    public function company()
    {
        return collect([1,2,3]);
    }


    public static function getByDomain()
    {
        return self::where('domain', $_SERVER['HTTP_HOST'])->first();
    }

}
