<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $data;    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
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
        // dd($this->data);
        $mail = $this->subject('##RE-64632##');
        $mail = $this->from('noreply-mikman@binus.edu');
        $mail->attach('/var/www/html/laravel-richie/public/document/VPN Internal  in MacOS Create Guide.pdf');
        $mail->attach('/var/www/html/laravel-richie/public/document/VPN Internal in window  7 Create Guide.pdf');
        $mail->attach('/var/www/html/laravel-richie/public/document/VPN Internal in window 10 Create Guide.pdf');

        return $mail->view('dynamic_email_template')->with('data', $this->data);


        // return $this->from('noreply-mikman@binus.edu')->subject('test')->view('dynamic_email_template')->with('data', $this->data);
    }
}
