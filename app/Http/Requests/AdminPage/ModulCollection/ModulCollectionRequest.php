<?php

namespace App\Http\Requests\AdminPage\ModulCollection;

use Illuminate\Foundation\Http\FormRequest;

class ModulCollectionRequest extends FormRequest
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
            'modul_collection' => ['required', 'string', 'max:40', 'unique:modul_collections'],
        ];

    }
}
