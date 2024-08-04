<?php

namespace Infrastructure\Repositories\User;

use Domain\Entities\User;
use Domain\Repositories\User\UserRepository;

class ElequentUserRepository implements UserRepository
{
    public function all()
    {
        return User::all();
    }
}