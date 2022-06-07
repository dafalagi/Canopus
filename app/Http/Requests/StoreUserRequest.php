<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Indicates if the validator should stop on the first rule failure.
     *
     * @var bool
     */
    protected $stopOnFirstFailure = true;

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
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|unique:users|string|max:30',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|string|min:8|max:15',
            'confirm_password' => 'required|same:password',
            'bio' => 'string',
            'is_admin' => 'boolean',
        ];
    }
}
