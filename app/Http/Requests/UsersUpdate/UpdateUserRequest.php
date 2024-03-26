<?php

namespace App\Http\Requests\UsersUpdate;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class UpdateUserRequest extends FormRequest
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
    #[ArrayShape(['name' => "string[]", 'familia' => "string[]", 'father_name' => "string[]", 'phone' => "string[]", 'date' => "string[]", 'gender' => "string[]"])]
    public function rules(): array
    {
        return [
            'name' => ['nullable', 'string', 'max:20'],
            'familia' => ['nullable', 'string', 'max:20'],
            'father_name' => ['nullable', 'string', 'max:20'],
            'phone' => ['nullable', 'string', 'max:10'],
            'date' => ['nullable', 'date'],
            'gender' => ['nullable', 'string', 'max:10']
        ];
    }
}
