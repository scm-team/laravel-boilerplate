<?php

namespace App\Interfaces\Dao\Auth;

interface LoginDaoInterface
{
    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     */
    public function store($request);
}