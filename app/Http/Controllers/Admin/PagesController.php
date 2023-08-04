<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function indexTerms(){
        $page = Page::find(1)->text;
        return view('admin.pages.terms', compact('page'));
    }

    public function updateTerms(Request $request){
        $page = Page::find(1);
        $page->update([
            'text' => $request->text,
        ]);
        return redirect()->route('terms')->with(['success' => 'تم تعديل صفحة شروط الخدمة بنجاح']);
    }

    public function indexPrivacy(){
        $page = Page::find(2)->text;
        return view('admin.pages.privacy', compact('page'));
    }


    public function updatePrivacy(Request $request){
        $page = Page::find(2);
        $page->update([
            'text' => $request->text,
        ]);
        return redirect()->route('privacy')->with(['success' => 'تم تعديل صفحة سياسة الخصوصية بنجاح']);
    }


}
