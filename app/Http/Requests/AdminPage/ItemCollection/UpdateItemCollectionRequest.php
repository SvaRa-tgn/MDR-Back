<?php

namespace App\Http\Requests\AdminPage\ItemCollection;

use Illuminate\Foundation\Http\FormRequest;

class UpdateItemCollectionRequest extends FormRequest
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
            'type_collection' => ['nullable', 'string', 'max:40'],
            'collection' => ['nullable', 'string', 'max:40', 'unique:item_collections'],
        ];

    }
}
