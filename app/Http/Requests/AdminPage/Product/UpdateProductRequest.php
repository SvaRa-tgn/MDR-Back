<?php

namespace App\Http\Requests\AdminPage\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'category' => ['nullable', 'string', 'max:255'],
            'sub_category' => ['nullable', 'string', 'max:255'],
            'type' => ['nullable', 'string', 'max:50'],
            'collection' => ['nullable', 'string', 'max:50'],
            'full_name' => ['nullable', 'string', 'max:255', 'unique:products'],
            'small_name' => ['nullable', 'string', 'max:255', 'unique:products'],
            'article' => ['nullable', 'string', 'max:255'],
            'height' => ['nullable', 'int', 'max:3000'],
            'width' => ['nullable', 'int', 'max:3000'],
            'deep' => ['nullable', 'int', 'max:5000'],
            'korpus' => ['nullable', 'string', 'max:255'],
            'fasad' => ['nullable', 'string', 'max:255'],
            'color_korpus_id' => ['nullable', 'string', 'max:255'],
            'color_fasad_id' => ['nullable', 'string', 'max:255'],
            'price' => ['nullable', 'int', 'max:400000']
        ];

    }
}
