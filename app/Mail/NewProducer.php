<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewProducer extends Mailable
{
    use Queueable, SerializesModels;


    protected $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$adresse,$zipcode,$ville)
    {
        $this->name = $name;
        $this->adresse = $adresse;
        $this->zipcode = $zipcode;
        $this->ville = $ville;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.newproducer')
        ->with([
              'name'    => $this->name,
              'adresse'    => $this->adresse,
              'zipcode'    => $this->zipcode,
              'ville'    => $this->ville,

          ])
        ->subject('Validation d\'inscription - Product\'Eure') ;
    }
}
