<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(Request $request){

        $Facebook = Social::find(1);
        $Email = Social::find(2);
        $Telegram = Social::find(4);
        $Whats = Social::find(5);
        $Phone = Social::find(7);

         return view('front.index', compact('Facebook', 'Email', 'Whats', 'Phone', 'Telegram'));

    }
}
