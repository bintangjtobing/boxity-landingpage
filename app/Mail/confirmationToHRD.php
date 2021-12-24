<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class confirmationToHRD extends Mailable
{
    public $candidate;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($candidate)
    {
        $this->candidate = $candidate;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $string = base64_encode(random_bytes(10));
        $company = DB::table('company_details')->first();

        return $this->from('apply_job' . $string . '@' . $company->site, $company->company_name . ' Human Resources System')
            ->subject('Hello! There is the one who applied to our job vacancy!')
            ->markdown('emails.confirmToHRD');
    }
}
