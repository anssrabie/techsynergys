<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function index(){

        $contacts= Contact::orderby('id', 'DESC')->get();
        return view('admin.contacts.index', compact('contacts'));
    }


    public function show($id){
        $contact = Contact::find($id);
        if (!$contact){
            return redirect()->route('contacts')->with(['error' => 'جهة الاتصال غير موجودة بالفعل']);
        }
        return view('admin.contacts.show', compact('contact'));
    }


   public function postShow($id){
        $contact = Contact::find($id);
        if (!$contact){
            return redirect()->route('contacts')->with(['error' => 'جهة الاتصال غير موجودة بالفعل']);
        }
        if ($contact->seen < 1){
            $contact->update([
                'seen' => 1,
                'seen_at' => Carbon::now()->toDateTimeString()
            ]);
            return redirect()->route('contacts')->with(['success' => 'تم رؤية جهة الاتصال بنجاح']);
        }else{
            $contact->update([
                'seen' => 0,
            ]);
            return redirect()->route('contacts')->with(['success' => 'تم جعل جهة الاتصال غير مقرؤة بنجاح']);
        }

    }


    public function delete($id){
        $contact = Contact::find($id);
        if (!$contact){
            return redirect()->route('contacts')->with(['error' => 'جهة الاتصال غير موجودة بالفعل']);
        }
        $contact->delete();
        return redirect()->route('contacts')->with(['success' => 'تم حذف جهة الأتصال بنجاح']);
    }



}
