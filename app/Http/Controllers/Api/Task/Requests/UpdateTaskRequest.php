<?php

namespace App\Http\Controllers\Api\Task\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
{
    const Name = 'name';
    
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
            self::Name => 'required|max:255'
        ];
    }
}
