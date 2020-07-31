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
            'firstname' => 'required|min:5|max:255',
            'lastname' => 'required|min:5|max:255',
            'birthdate' => 'required|date',
            'rep_subject' => 'required|min:5|max:255',
            'country_id' => 'required',
            'phone' => 'required|regex:/\+[0-9,\-, ,(,)]+$/',
//            'phone' => 'required',
            'email' => 'required',
        ];
    }
}
