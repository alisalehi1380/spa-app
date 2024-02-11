<?php

namespace App\Http\Controllers\Web\Auth\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    const Email = 'email';
    const Password = 'password';
    
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
            self::Email    => 'required|email',
            self::Password => 'required'
        ];
    }
}
