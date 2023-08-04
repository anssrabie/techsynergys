<?php

namespace App\Http\Controllers\Admin;

use App\Exports\EmailsExport;
use App\Http\Controllers\Controller;
use App\Models\EmailSubscriber;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MailSubscriptions extends Controller
{
    public function index(){
        $emails = EmailSubscriber::get();
        return view('admin.emails.index', compact('emails'));
    }

    public function delete(Request $request){
        $email = EmailSubscriber::find($request->id);
        if ($email){
            $email->delete();
            return response()->json([
                'status' => true,
                'id' => $request->id,
            ]);
        }

    }

    public function export(){
        return Excel::download(new EmailsExport(), 'emails.xlsx');
    }


}
