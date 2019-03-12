<?php

namespace Mach3builders\PrivateLabel;

use Illuminate\Support\Arr;
use Mach3builders\PrivateLabel\PrivateLabel as BaseModel;

class Repository
{
    protected $label;
    protected $default_label;

    function __construct()
    {
        $this->label = $this->getLabel();
        $this->default_label = config('private-label.default');
    }

    protected function getLabel()
    {
        return BaseModel::getByDomain();
    }

    public function get($param)
    {
        return Arr::get($this->label, $param)
                ?? Arr::get($this->default_label, $param);
    }

    public function has($param)
    {
        return Arr::has($this->label, $param);
    }

    public function __call($method, $params)
    {
        $this->label->$method($params);
    }
}
