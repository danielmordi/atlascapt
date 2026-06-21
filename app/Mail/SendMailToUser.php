<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailToUser extends Mailable
{
    use Queueable, SerializesModels;

    public $msg;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg, $subject)
    {
      $this->msg = $msg;
      $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@'.config('app.url'), config('app.name'))
                    ->markdown('email.sendmail')
                    ->with($this->msg);
    }
}
