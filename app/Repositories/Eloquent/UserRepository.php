<?php


namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryinterface;

class UserRepository extends AbstractRepository implements UserRepositoryinterface
{
    protected $model = User::class;

  
}
