<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'profile_photo_path' => ['nullable', 'image', 'max:2048'], // Assuming profile_photo_path is used for storing image path
            'phone_no' => ['required', 'string', 'max:20'], // Adjust max length as needed
            'date_of_birth' => ['date'],
            'gender' => ['nullable', 'in:Male,Female'],
            'academic_qualification' => ['nullable', 'string'],
            'years_of_experience' => ['integer', 'min:0'],
            'cv_path' => ['file', 'max:2048'], // Assuming cv_path is used for storing CV file path
            'user_id' => ['exists:users,id'], // Assuming user_id is a foreign key referencing the id column of the users table
        ];
    }
}
