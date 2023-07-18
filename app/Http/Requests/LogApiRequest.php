<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogApiRequest extends FormRequest
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
            'is_production' => 'nullable|boolean',
            'url' => 'nullable|string',
            'method' => 'nullable|string',
            'user_agent' => 'nullable|string',
            'ip' => 'nullable|string',
            'date_time' => 'nullable|string',
            'current' => 'nullable|array',
            'previous' => 'nullable|array',
        ];
    }
}
