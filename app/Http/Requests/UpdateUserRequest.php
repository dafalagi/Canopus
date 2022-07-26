<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'currentPassword' => 'nullable|required_with:password,confirm_password|string|min:8|max:15',
            'password' => 'nullable|required_with:currentPassword,confirm_password|string|min:8|max:15',
            'confirm_password' => 'nullable|required_with:currentPassword,password|same:password',
            'avatar' => 'nullable|image|file|max:2048',
            'banner' => 'nullable|string',
            'bio' => 'nullable|string',
            'is_admin' => 'nullable|boolean'
        ];
    }
}
