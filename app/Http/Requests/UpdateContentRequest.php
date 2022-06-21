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
            'intro' => 'required|string|min:20',
            'history' => 'required|string|min:20',
            'category' => 'required|string',
            'coordinate' => 'nullable|string|min:5',
            'distance' => 'nullable|string|min:5',
            'event' => 'nullable|string',
            'mainpicture' => 'nullable|image|file|max:2048',
            'pictures[]' => 'nullable|array',
            'trivia' => 'required|string|min:20',
        ];
    }
}
