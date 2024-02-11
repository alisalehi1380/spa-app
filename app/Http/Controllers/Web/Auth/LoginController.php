<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\Auth\Requests\LoginRequest;
use App\Models\User\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request)
    {
        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }
        return $this->sendFailedLoginResponse($request);
    }
    
    private function attemptLogin($request): bool
    {
        return Auth::attempt([
            User::Email    => $request->{LoginRequest::Email},
            User::Password => $request->{LoginRequest::Password}
        ]);
    }
    
    private function sendLoginResponse($request)
    {
        $request->session()->regenerate();
        
        return $request->wantsJson()
            ? response()->json([], 204)
            : redirect()->intended(RouteServiceProvider::HOME);
    }
    
    private function sendFailedLoginResponse($request)
    {
        throw ValidationException::withMessages([
            $request->input(LoginRequest::Email) => ['چنین کاربری وجود ندارد'],
        ]);
    }
}

