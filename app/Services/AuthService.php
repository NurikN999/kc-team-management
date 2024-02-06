<?php

declare(strict_types=1);

namespace App\Services;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function register(array $data): User
    {
        $user = User::create($data);
        $user->password = Hash::make($data['password']);
        $user->save();
        Auth::login($user);

        return $user;
    }

    public function login(array $credentials): bool
    {
        return Auth::attempt($credentials);
    }
}
