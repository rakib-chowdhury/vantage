<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\model\Company;

class visitorMessage extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $data;

    public function __construct($data)
    {
        $this->inputs = $data;
//        $this->name= $data['name'];
//        $this->mb=$data['mobile'];
//        $this->email=$data['email'];
        $this->sub = $data['sub'];
//        $this->msg=$data['msg'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $sub=$this->sub;
        $dataSMS = $this->inputs;
        $data['company'] = Company::all();
        //'ititahmina@gmail.com'
        return $this->from($data['company'][0]->mailFrom)
            ->subject($sub)
            ->view('vantage.pages.home.sendSMS', $dataSMS);
    }
}