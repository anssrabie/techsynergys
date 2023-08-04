<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Mail\ResetPasswordEmail;
use App\Models\Admin;
use App\Models\PasswordResets;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AccountsController extends Controller
{

    private function sendResetEmail($email, $token)
    {
        //Retrieve the user from the database
        $user = User::where('email', $email)->select('email', 'name')->first();
        //Generate, the password reset link. The token generated is embedded in the link
        $link = config('base_url') . 'password/reset/' . $token . '?email=' . urlencode($user->email);

            try
            {
                Mail::to($email)->send(new ResetPasswordEmail($user, $token));
                return true;

            } catch (\Exception $e) {
                return false;
            }

    }

    public function emailView(){
        return view('admin.auth.email');
    }

    public function validatePasswordRequest(ResetPasswordRequest $request){


        $user = User::where('email', '=', $request->email)->first();

        //Check if the user exists
        if (!$user) {
            return redirect()->route('reset.email')->with(['error' => 'هذا البريد الألكتروني غير موجود في سجلاتنا']);
        }elseif ($user->status < 1){
            return redirect()->route('reset.email')->with(['error' => 'تم الغاء تفعيل الحساب الخاص بك']);

        }

        $rows = PasswordResets::where('user_id', $user->id);
        if ($rows->count() > 0){
            $rows->delete();
        }

        $tokenData = PasswordResets::create([
            'email' => $request->email,
            'user_id' => $user->id,
            'token' => Str::random(60),
        ]);


        if ($this->sendResetEmail($request->email, $tokenData->token)) {
            return redirect()->route('reset.email')->with(['success' => 'تم أرسال رابط اعادة التعين للبريد الألكتروني الخاص بك']);
        } else {
            return redirect()->route('reset.email')->with(['error' => 'يوجد مشكلة ما برجاء المحاولة مرة أخري']);

        }

    }

    public function changePassword($token){
       $reset = PasswordResets::where('token', $token)->first();
       if (!$reset) {
           return redirect()->route('reset.email')->with(['error' => 'حدث خطأ في الشبكة. حاول مرة اخرى']);
       }
       return view('auth.change-password', compact('reset'));
    }



    public function PostChangePassword(ChangePasswordRequest $request, $id){
        // Check
        $user = User::find($id);
        if (!$user) {return redirect()->route('reset.email')->with(['error' => 'حدث خطأ في الشبكة. حاول مرة اخرى']);}

        $password = Hash::make($request->password);
        // Update Password
        $update = User::where('id', $user->id)->update([
            'password' => $password
        ]);

        // Delete Token
        if ($update){
            PasswordResets::where('user_id', $user->id)->delete();
            //Auth::login($user);
            return redirect()->route('login');
        }
    }


}
