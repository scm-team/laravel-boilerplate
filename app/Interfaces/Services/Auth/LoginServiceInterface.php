<?php

namespace App\Interfaces\Services\Auth;

interface LoginServiceInterface
{
   /**
    * Handle an incoming authentication request.
    *
    * @param  \App\Http\Requests\Auth\LoginRequest  $request
    */
   public function store($request);

   /**
    * Destroy an authenticated session.
    *
    * @param  \Illuminate\Http\Request  $request
    */
   public function destroy($request);
}
