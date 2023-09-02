<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Rules\IsPhoneNumber;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Validator;

class ContactController extends Controller
{
    public function index(Request $request){

        $rules = array(
            'name'     => 'required|max:250',
            'whats'    => ['required', new IsPhoneNumber($request->region)],
            'subject'  => 'required|max:250',
            'message'  => 'required|string',
            'email'    => 'nullable|email|max:250',
        );

        $messages = array(
            'required' => __('a.This field is required'),
            'email'=> __('a.Please enter valid e-mail'),
            'max'=> __('a.This field may not be greater than 250 characters'),
        );

        $validator = Validator::make( $request->all(), $rules, $messages);
        if ( $validator->fails() )
        {  return [ 'error' => $validator->errors()];}

        // Fetch City and Country
        $position = Location::get(getUserIP());
        if ($position) {
            $Country = $position->countryName;
            $City = $position->cityName;
        }else {
            $Country = null;
            $City = null;
        }

         Contact::create([
             'name' => $request->name,
             'email' => $request->email,
             'subject' => $request->subject,
             'message' => $request->message,
             'whats' => $request->whats,
             'country' => $Country,
             'city' => $City,
         ]);



        return response()->json([
            'status' => true
        ]);
    }


}
