<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function __invoke(Request $request)
    {
        auth()->guard()->logout();
        $request->session()->regenerateToken();
        $request->session()->invalidate();
        
        return $request->wantsJson() ? response()->json([], 204) : redirect('/');
    }
}
