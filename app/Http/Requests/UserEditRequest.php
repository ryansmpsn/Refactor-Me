<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsereditRequest extends FormRequest
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
            'title' => 'required|string|max:280',
            'body'  => 'required|string|max:100',
        ];
    }

    /**
     * Custom Message for Validation
     * 
     * @return array
     */
    public function messages()
    {
        return[
            'title.required' => 'Title is required!',
            'title.max' => 'The Title is more than 100 characters. Try something shorter.',
            'body.required' => 'Body is required!',
            'body.max' => 'The Body is more than 280 characters. Try to be a bit more brief.',
        ];
    }
}
