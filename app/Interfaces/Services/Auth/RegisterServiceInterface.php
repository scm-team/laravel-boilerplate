<?php

namespace App\Interfaces\Services\Auth;

interface RegisterServiceInterface
{
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store($request);
}
