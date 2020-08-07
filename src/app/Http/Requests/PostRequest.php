<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class PostRequest
 * @package App\Http\Requests
 */
class PostRequest extends FormRequest
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
            'firstname' => 'required|min:1|max:50',
            'lastname' => 'required|min:1|max:50',
            'birthdate' => 'required|date',
            'rep_subject' => 'required|min:3|max:255',
            'country_id' => 'required',
            'phone' => 'required|regex:/\+[0-9,\-, ,(,)]+$/',
            'email' => 'required|email',
            'company' => 'nullable|min:0|max:70',
            'position' => 'nullable|min:0|max:100',
            'about' => 'nullable|min:0|max:1000',
            'photo' => 'nullable|mimes:jpeg,gif,png,jpg',
        ];
    }
}
