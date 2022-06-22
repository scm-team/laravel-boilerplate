<?php

namespace App\Dao\Auth;

use App\Interfaces\Dao\Auth\RegisterDaoInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterDao implements RegisterDaoInterface
{   
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \App\Models\User
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store($request)
    {
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }
}
