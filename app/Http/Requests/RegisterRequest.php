<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the users is authorized to make this request.
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
            'name' => ['string', 'max:255', 'required'],
            'username' => ['string', 'max:255', 'required','unique:users,username'],
            'email' => ['required', 'string','unique:users,email'],
            'password' => ['string', 'min:8', 'required'],
            'password_confirmation' => ['string', 'min:8', 'required','same:password']
        ];
    }
}
