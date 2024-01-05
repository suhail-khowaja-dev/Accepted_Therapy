<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $cms_content_detail;
    public function __construct($cms_content_detail)
    {
        $this->cms_content_detail = $cms_content_detail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Request For Quote Inquiry')
        ->view('admin.quote_email');
        // return $this->view('web.email_message');
    }
}
