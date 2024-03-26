<?php

namespace App\Http\Requests\AdminPage\Product;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'category' => ['required', 'string', 'max:50'],
            'sub_category' => ['required', 'string', 'max:50'],
            'type' => ['required', 'string', 'max:50'],
            'collection' => ['nullable', 'string', 'max:5000'],
            'full_name' => ['required', 'string', 'max:50', 'unique:products'],
            'small_name' => ['required', 'string', 'max:50', 'unique:products'],
            'article' => ['required', 'string', 'max:50'],
            'height' => ['required', 'int', 'max:3000'],
            'width' => ['required', 'int', 'max:3000'],
            'deep' => ['required', 'int', 'max:5000'],
            'status' => ['required', 'string', 'max:15'],
            'image_top' => ['required', 'image', 'mimes:jpg,png,jpeg,webp', 'max:30000'],
            'image' => ['nullable', 'image', 'mimes:jpg,png,jpeg,webp', 'max:30000'],
            'image1' => ['nullable', 'image', 'mimes:jpg,png,jpeg,webp', 'max:30000'],
            'image2' => ['nullable', 'image', 'mimes:jpg,png,jpeg,webp', 'max:30000'],
            'image3' => ['nullable', 'image', 'mimes:jpg,png,jpeg,webp', 'max:30000'],
            'korpus' => ['required', 'string', 'max:8'],
            'fasad' => ['required', 'string', 'max:8'],
            'color_korpus_id' => ['required', 'string', 'max:255'],
            'color_fasad_id' => ['required', 'string', 'max:255'],
            'price' => ['required', 'int', 'max:400000']
        ];

    }
}
