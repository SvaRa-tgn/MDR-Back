<?php

namespace App\Http\Requests\AdminPage\SubCategory;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryCreateRequest extends FormRequest
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
            'category' => ['required', 'string', 'max:30'],
            'sub_category' => ['required', 'string', 'max:50', 'unique:sub_categories'],
            'type_item' => ['required', 'string', 'max:30'],
            'image' => ['required', 'image', 'max:30000']
        ];

    }
}
