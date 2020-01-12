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
        if($this->data["action"] == 'add_access'){
            $mail = $this->to($this->data['email']);
            $mail = $this->subject('[Ticket ##RE-'. $this->data["number"] .'##] :'. $this->data["subject"]);
            $mail = $this->from('mikman@binus.edu');
            // $mail = $this->cc(['richie.muliawan@binus.edu','ithelpdesk@binus.edu']);
            $mail->attach('/var/www/html/laravel-richie/public/document/VPN Internal  in MacOS Create Guide.pdf');
            $mail->attach('/var/www/html/laravel-richie/public/document/VPN Internal in window  7 Create Guide.pdf');
            $mail->attach('/var/www/html/laravel-richie/public/document/VPN Internal in window 10 Create Guide.pdf');
    
            return $mail->view('templates.addaccess')->with('data', $this->data);
        }else if($this->data["action"] == 'create'){
            $mail = $this->to($this->data['email']);
            $mail = $this->subject('[Ticket ##RE-'. $this->data["number"] .'##] :'. $this->data["subject"]);
            $mail = $this->from('mikman@binus.edu');
            // $mail = $this->cc('klemens.raharja@binus.edu');

            return $mail->view('templates.newvpn')->with('data', $this->data);
        }else if($this->data["action"] == 'form_register'){
            $mail = $this->to($this->data['email']);
            $mail = $this->subject('[Ticket ##RE-'. $this->data["number"] .'##] :'. $this->data["subject"]);
            $mail = $this->from('mikman@binus.edu');
            // $mail = $this->cc('klemens.raharja@binus.edu');
 
            $mail = $this->cc($this->data['directReportsEmail']);


            return $mail->view('templates.formregister')->with('data', $this->data);
        }else if($this->data["action"] == 'form_add_access'){
            $mail = $this->to($this->data['email']);
            // if(isset($this->data["number"])){
            //     $mail = $this->subject('[Ticket ##RE-'. $this->data["number"] .'##] :'. $this->data["subject"]);
            // }else{
                $mail = $this->subject('['. $this->data["name"] .'] :'. 'Permintaan Akun VPN');
            // }
            
            $mail = $this->from('mikman@binus.edu');
            // $mail = $this->cc('klemens.raharja@binus.edu');
 
            $mail = $this->cc($this->data['directReportsEmail']);


            return $mail->view('templates.formaddaccess')->with('data', $this->data);
        }else if($this->data["action"] == 'send_creds'){
            $mail = $this->to($this->data['email']);
            $mail = $this->subject('[Ticket ##RE-'. $this->data["number"] .'##] :'. $this->data["subject"]);
            $mail = $this->from('mikman@binus.edu');
            // $mail = $this->cc(['richie.muliawan@binus.edu','ithelpdesk@binus.edu']);
            $mail->attach('/var/www/html/laravel-richie/public/document/VPN Internal  in MacOS Create Guide.pdf');
            $mail->attach('/var/www/html/laravel-richie/public/document/VPN Internal in window  7 Create Guide.pdf');
            $mail->attach('/var/www/html/laravel-richie/public/document/VPN Internal in window 10 Create Guide.pdf');
    
        }
        // return $this->from('noreply-mikman@binus.edu')->subject('test')->view('dynamic_email_template')->with('data', $this->data);
    }
}
