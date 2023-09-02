<?php

namespace App\Console\Commands;

use App\Models\Email;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

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
        // Ahmed Email
        $AhmedEmails = Email::where('ahmed',0)->get();
        if (count($AhmedEmails) > 0){
            foreach ($AhmedEmails as $ahmedEmail){
                $contact = $ahmedEmail->contact->first();
                // Log::info($contact);
            }
        }
    }
}
