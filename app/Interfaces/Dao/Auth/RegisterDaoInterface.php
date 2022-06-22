<?php

namespace App\Interfaces\Dao\Auth;

interface RegisterDaoInterface
{
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store($request);
}