<?php

namespace App\Repositories\Contracts;

interface UserRepositoryinterface
{
    public function store(array $data);
    public function find($id);
}