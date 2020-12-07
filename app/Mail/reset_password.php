<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class reset_password extends Mailable
{
    use Queueable, SerializesModels;
    protected $data=[];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data = [])
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('Admin.emails.reset_password')
        ->subject('أعادة تعين كلمة السر')
        ->with('data', $this->data);
    }
}
