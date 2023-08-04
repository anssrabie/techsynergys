<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index(){

        $facebook = Social::where('type', 'facebook')->first();
        $whats = Social::where('type', 'whats')->first();
        $instagram = Social::where('type', 'instagram')->first();
        $telegram = Social::where('type', 'telegram')->first();
        $email = Social::where('type', 'email')->first();
        $phone = Social::where('type', 'phone')->first();

        return view('admin.social.index', compact('facebook','instagram', 'telegram', 'whats', 'email', 'phone'));
    }

    public function update(Request $request){


        if ($request->has('facebook_name')){
            $fa = Social::where('type', 'facebook')->first();
            $FacebookName = $request->facebook_name;
            if ($fa){$fa->update([ 'name' => ucfirst($FacebookName) ]);}
        }

        if ($request->has('facebook_link')){
            $fa = Social::where('type', 'facebook')->first();
            $FacebookLink = $request->facebook_link;
            if ($fa){$fa->update([ 'link' => $FacebookLink]); }
        }


        if ($request->has('instagram_name')){
            $fa = Social::where('type', 'instagram')->first();
            $InstagramName = $request->instagram_name;
            if ($fa){$fa->update([ 'name' => ucfirst($InstagramName) ]);}
        }

        if ($request->has('instagram_link')){
            $fa = Social::where('type', 'instagram')->first();
            $InstagramLink = $request->instagram_link;
            if ($fa){$fa->update([ 'link' => $InstagramLink ]);}
        }

        if ($request->has('whats_number')){
            $fa = Social::where('type', 'whats')->first();
            $WhatsNumber = $request->whats_number;
            $WhatsLink = "https://wa.me/+".$WhatsNumber;
            if ($fa){$fa->update(['name' => $WhatsNumber, 'link' => $WhatsLink ]);}
        }

        if ($request->has('telegram_name')){
             $fa = Social::where('type', 'telegram')->first();
             $TelegramName = $request->telegram_name;

             if(is_numeric($TelegramName)) {
                 $TelegramLink = "https://t.me/+".$TelegramName;
             }else{
                 $TelegramLink = "https://t.me/".$TelegramName;
             }

            if ($fa){$fa->update([ 'name' => $TelegramName, 'link' => $TelegramLink ]);}
        }

        if (!empty($request->phone)){
            $fa = Social::where('type', 'phone')->first();
            $Phone = $request->phone;
            if ($fa){$fa->update(['link' =>$Phone]);}
        }

        if ($request->has('email')){
            $fa = Social::where('type', 'email')->first();
            $Email = $request->email;
            if ($fa){$fa->update(['link' => $Email]);}
        }

        return redirect()->route('social')->with(['success' => 'تم تعديل بيانات التواصل الأجتماعي بنجاح']);


    }
}
