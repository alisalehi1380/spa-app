<?php

namespace App\Http\Controllers\Task\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            //
        ];
    }
}
