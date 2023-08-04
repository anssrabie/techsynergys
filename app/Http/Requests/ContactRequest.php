<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|string||max:255',
            'subject' => 'required|string||max:255',
            'phone' => 'required|max:40|regex:/^([0-9\s\-\+\(\)]*)$/',
            'message' => 'required',
            'email' => 'required|email|max:255',
        ];
    }
    public function messages()
    {
        return [
            'required'  => __('a.This field is required'),
            'name.max'  => __('a.This field must not exceed 255 characters'),
            'subject.max'  => __('a.This field must not exceed 255 characters'),
            'email.max'  => __('a.This field must not exceed 255 characters'),
            'phone.max'  => __('a.This field is very large'),
            'email' => __('a.The email must be a valid email address.'),
            'regex' => __('messages.The phone format is invalid'),
        ];
    }
}
