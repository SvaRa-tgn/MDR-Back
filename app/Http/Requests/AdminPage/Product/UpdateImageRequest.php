<?php

namespace App\Http\Requests\AdminPage\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateImageRequest extends FormRequest
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
            'id' => ['required', 'int', 'max:10000'],
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg,webp', 'max:204800']
        ];

    }
}
