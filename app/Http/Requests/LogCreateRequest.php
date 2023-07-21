<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'token' => 'required|string',
            'app' => 'nullable|string',
            'env' => 'nullable|string',
            'laravel_version' => 'nullable|string',
            'php_version' => 'nullable|string',
            'is_auth' => 'nullable|boolean',
            'user' => 'nullable|string',
            'is_production' => 'nullable|boolean',
            'url' => 'nullable|string',
            'method' => 'nullable|string',
            'user_agent' => 'nullable|string',
            'ip' => 'nullable|string',
            'base_path' => 'nullable|string',
            'date_time' => 'nullable|string',
            'timezone' => 'nullable|string',
            'current' => 'nullable|array',
            'previous' => 'nullable|array',
        ];
    }
}
