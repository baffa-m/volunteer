<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganizationRequest extends FormRequest
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:organizations'],
            'org_name' => ['required', 'string', 'max:255'],
            'about' => ['required', 'string'],
            'contact_phone' => ['nullable', 'string'],
            'address' => ['required', 'string'],
            'state_id' => ['required', 'integer'],
            'user_id' => ['required', 'integer'],
            'avatar_path' => ['nullable', 'image', 'max:2048'], // Assuming avatar_path is used for storing image path
        ];
    }
}
