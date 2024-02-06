<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function register(RegisterRequest $request)
    {
        $user = $this->authService->register($request->validated());

        if ($user) {
            return redirect('/dashboard');
        }

        return redirect('/register');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if ($this->authService->login($credentials)) {
            return redirect('/dashboard');
        }

        return redirect('/login');
    }
}
