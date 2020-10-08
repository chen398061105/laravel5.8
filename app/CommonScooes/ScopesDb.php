<?php
use \Illuminate\Database\Eloquent\Scope;
use \Illuminate\Database\Eloquent\Builder;
use \Illuminate\Database\Eloquent\Model;


class ScopsDb implements Scope{

    public function apply( Builder $builder,  Model $model)
    {
        $builder->where('gender','1');
    }
}