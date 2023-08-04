<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddAboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){

        $abouts = About::orderby('id', 'DESC')->get();
        return view('admin.about.index', compact('abouts'));
    }

    public function update(AddAboutRequest $request){

        About::create([
            'text' => $request->text,
        ]);
        return redirect()->route('about')->with(['success' => 'تم تعديل بيانات صفحة من نحن بنجاح']);
    }

    public function delete(Request $request){
        $id = $request->id;
        $about = About::find($id);

        if ($about){
            $about->delete();
            return response()->json([
                'status'=> true,
                'id' => $id,
            ]);
        }


    }

}
