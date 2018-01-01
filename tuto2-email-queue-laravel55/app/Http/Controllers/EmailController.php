<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;
use App\Mail\SendMailable;
use App\Jobs\SendEmailJob;

class EmailController extends Controller
{
    public function sendEmail()
    {
    	// Envío de emails a través de queue jobs
    	// 3 segundos delay
    	$emailJob = (new SendEmailJob())->delay(Carbon::now()->addSeconds(3));
    	dispatch($emailJob);

        // Envío directo de emails (sin queue jobs)
        //Mail::to('mail@appdividend.com')->send(new SendMailable());
        
        echo 'email sent';
    }

    public function writeLog() {
         Log::info("writing logs from EmailController.writeLog ...");
    }
}
