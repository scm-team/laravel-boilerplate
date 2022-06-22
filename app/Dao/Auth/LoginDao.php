<?php

namespace App\Dao\Auth;

use App\Interfaces\Dao\Auth\LoginDaoInterface;

class LoginDao implements LoginDaoInterface
{
    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     */
    public function store($request)
    {
        $request->authenticate();
    }
}
