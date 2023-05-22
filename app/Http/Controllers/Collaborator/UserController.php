<?php

namespace App\Http\Controllers\Collaborator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Collaborator\User\RegisterRequest;
use App\Models\Collaborator\User\User;

class UserController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        User::create($request->validated());
        return view('auth.register')->with('success', 'Account created succesfully!');
    }
}
