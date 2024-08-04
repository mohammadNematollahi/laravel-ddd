<?php

namespace Domain\Services\User;

use Infrastructure\Repositories\User\ElequentUserRepository;

class UserService
{

    public function __construct(public ElequentUserRepository $elequentUserRepository){}

    public function all()
    {
        return $this->elequentUserRepository->all();
    }

}