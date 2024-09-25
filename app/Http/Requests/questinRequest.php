<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class questinRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->status=='admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => 'required|exists:categories,id',
            'question' => 'required|string',
            'type' => 'required|in:text,date,select',
        ];
    }
}
