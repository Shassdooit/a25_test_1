<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWorkerRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:workers,email',
            'password' => 'required|min:6',
            'hourly_rate' => 'required|integer|min:0',
            'payment_type' => 'required|in:hourly,fixed',
            'weekly_salary' => 'nullable|numeric',
        ];
    }
}
