<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'picture' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
            'slug' => 'required|unique:contents',
            'category' => 'required',
            'coordinate' => 'required',
            'trivia' => 'required',
        ];
    }
}
