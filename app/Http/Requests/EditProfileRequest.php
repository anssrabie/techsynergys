<?php

namespace App\Http\Requests;

use App\Rules\MatchOldPassword;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class EditProfileRequest extends FormRequest
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
        $user = Auth::user();
        return [

            'email'=>'required|email|max:150|unique:admins,email,'.$user->id,
            'name'=>'required|string|min:4|max:100',
           'current_password' => ['sometimes','nullable', new MatchOldPassword(), 'required_with:password'],
            'password'=> 'nullable|min:8|max:30',
        ];
    }

    public function messages()
    {
        return [
            'required'=>'من فضلك أدخل هذا الحقل',
            'current_password.required_with'=>'من فضلك أدخل كلمة المرور الحالية',
            'name.max'=>'هذا الحقل يجب ان لا يزيد عن 100 حرف',
            'password.max'=>'هذا الحقل يجب ان لا يزيد عن 30 حرف',
            'name.min'=>'هذا الحقل يجب ان لا يقل عن 4 احرف',
            'password.min'=>'كلمة المرور يجب ان لا تقل عن 8 احرف',
            'email.unique'=>'البريد الألكتروني موجود بالفعل',

        ];
    }
}
