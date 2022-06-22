<?php

namespace App\Services\Auth;

use App\Interfaces\Dao\Auth\RegisterDaoInterface;
use App\Interfaces\Services\Auth\RegisterServiceInterface;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class RegisterService implements RegisterServiceInterface
{
    private $registerDao;

    public function __construct(RegisterDaoInterface $registerDao)
    {
        $this->registerDao = $registerDao;
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store($request)
    {
        $user = $this->registerDao->store($request);

        event(new Registered($user));

        Auth::login($user);
    }
}
