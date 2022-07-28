<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReportRequest extends FormRequest
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
            'content_title' => 'nullable|required_without_all:discuss_id,comment_id|exists:contents,title',
            'discuss_id' => 'nullable|exists:discusses,id',
            'comment_id' => 'nullable|exists:comments,id',
        ];
    }
}
