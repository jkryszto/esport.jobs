<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'required',
            'category_id' => 'required|numeric|',
            'job_type_id' => 'required|numeric',
            'job_level_id' => 'required|numeric',
            'from' => 'numeric|nullable',
            'to' => 'numeric|nullable',
            'currency' => 'string|max:3|min:3|nullable',
            'location' => 'required|string',
            'other_apply' => 'url|nullable'
        ];
    }
}
