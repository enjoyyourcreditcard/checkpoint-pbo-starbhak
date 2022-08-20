<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nik' => 'max:16|unique:users',
            'email' => 'email|unique:users',
            'username' => 'required|max:24|min:3|unique:users',
            'password' => 'required|max:255|min:6',
            'role' => 'required'
        ];
    }
}
