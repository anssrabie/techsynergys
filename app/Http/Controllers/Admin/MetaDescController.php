<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MetaRequest;
use App\Models\Description;
use Illuminate\Http\Request;

class MetaDescController extends Controller
{
    public function index(){
            $description = Description::find(1)->text;
            $keywords = Description::find(2)->text;
            return view('admin.meta.index', compact('description', 'keywords'));
    }

    public function editMeta(Request $request){



       Description::where('id', '1')->update([
            'text'=>$request->meta,
        ]);

         Description::where('id', '2')->update([
            'text'=>$request->keywords,
        ]);

          return redirect()->route('meta')->with(['success'=> 'تم تعديل وصف الموقع بنجاح']);


    }
}
