<?php

namespace App\Console\Commands;

use App\Mail\ContactMail;
use App\Models\Email;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;

class ContactEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contact';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email to Us';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $ahmed = 'ahmedrabi2020@gmail.com';
        $anss = 'anss.clash@gmail.com';

        // Email to Ahmed
        $AhmedEmails = Email::where('ahmed',0)->get();
        if (count($AhmedEmails) > 0){
            foreach ($AhmedEmails as $ahmedEmail){
                $contact = $ahmedEmail->contact->first();
                $emailSent = sendLeadEmail();
                if ($emailSent) {
                    $ahmedEmail->update([
                        'ahmed' => 1,
                        'ahmed_time' => Carbon::now(),
                    ]);
                }

            }
        }


        // Email to Anss
        $AnssEmails = Email::where('anss',0)->get();
        if (count($AnssEmails) > 0){
            foreach ($AnssEmails as $anssEmail){
                $contact = $anssEmail->contact->first();

                $emailSent =  sendLeadEmail();
                if ($emailSent) {
                    $anssEmail->update([
                        'anss' => 1,
                        'anss_time' => Carbon::now(),
                    ]);
                }

            }
        }

    }


//    private function sendEmail($contact,$email)
//    {
//        try
//        {
//            $result = Mail::to($email)->send(new ContactMail($contact));
//
//            if ($result) {
//                return true;
//            } else {
//                return false;
//            }
//
//
//        } catch (\Exception $e) {
//            return false;
//        }
//
//    }
}
