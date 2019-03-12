<?php

namespace Mach3builders\PrivateLabel;

use Illuminate\Database\Eloquent\Model;

class PrivateLabel extends Model
{
    protected $fillable = [
        'relation_id',
        'name',
        'domain',
        'email',
        'logo',
        'favicon'
    ];

    public function relation()
    {
        return $this->belongsTo(config('private-label.relation', 'App\User'), 'relation_id');
    }
}
