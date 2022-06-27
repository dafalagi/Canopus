<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContentRequest extends FormRequest
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
            'title' => 'required|unique:contents|min:5',
            'intro' => 'required|string|min:20',
            'history' => 'required|string|min:20',
            'category' => 'required|string',
            'coordinate' => 'nullable|string',
            'distance' => 'nullable|string',
            'event' => 'nullable|string',
            'mainpicture' => 'nullable|image|file|max:2048',
            'pictures[]' => 'nullable|array',
            'trivia' => 'required|string|min:20',
        ];
    }
}
