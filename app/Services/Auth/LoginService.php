<?php

namespace App\Services\Auth;

use App\Interfaces\Services\Auth\LoginServiceInterface;
use App\Interfaces\Dao\Auth\LoginDaoInterface;
use Illuminate\Support\Facades\Auth;

class LoginService implements LoginServiceInterface
{
    private $loginDao;

    public function __construct(LoginDaoInterface $loginDao)
    {
        $this->loginDao = $loginDao;
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     */
    public function store($request)
    {
        $this->loginDao->store($request);
        $request->session()->regenerate();
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function destroy($request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
    }
}
