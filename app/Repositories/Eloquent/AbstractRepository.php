<?php

namespace App\Repositories\Eloquent;

abstract class AbstractRepository

{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    public function store(array $data)
    {
    
        return $this->model->create($data);
    }
    
    protected function resolveModel()
    {
        return app($this->model);
    }

}