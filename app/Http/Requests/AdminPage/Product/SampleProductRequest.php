<?php

namespace App\Http\Requests\AdminPage\Product;

use Illuminate\Foundation\Http\FormRequest;

class SampleProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category' => ['required', 'int', 'max:10000'],
            'sub_category' => ['required', 'int', 'max:10000']
        ];

    }
}
