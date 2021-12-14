<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;

class JobController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function sendBulkEmails()
    {
        $job = (new SendEmailJob());
        dispatch($job);
        return "Bulk mail send successfully in the background...";
    }
}
