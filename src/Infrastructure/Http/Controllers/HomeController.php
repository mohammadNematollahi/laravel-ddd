<?php

namespace Infrastructure\Http\Controllers;

use Domain\Services\User\UserService;
use Infrastructure\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct(public UserService $userService){

    }

    public function index()
    {
        return view("welcome");
    }

    public function showUsers()
    {
        return $this->userService->all();
    }
}