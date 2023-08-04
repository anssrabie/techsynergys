<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'name' => 'required|unique:users,name,'.$this->id,
            'email' => 'required|email|unique:users,email,'.$this->id,
            'password' => 'same:confirm-password',
        ];
    }
    public function messages()
    {
        return [
            'name.unique' => 'هذا الأسم تم أخذه بالفعل',
            'email.unique' => 'البريد الإلكتروني تم أخذه بالفعل',
            'required' => 'هذا الحقل مطلوب',
            'email' => 'يجب أن يكون الايميل عنوان بريد إلكتروني صالحًا',
            'same' => 'يجب أن تتطابق كلمة المرور مع تأكيد كلمة المرور',
            'min' => 'يجب أن تتكون كلمة المرور من 8 أحرف على الأقل',
        ];
    }
}
