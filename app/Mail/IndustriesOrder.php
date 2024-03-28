<?php

namespace App\Mail;

use App\Models\Industry;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class IndustriesOrder extends Mailable
{
    use Queueable, SerializesModels;

    protected $industry;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Industry $industry)
    {
        //

        $this->industry=$industry;

    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('masaneco@masaneco.ae','Masaneco')
            ->subject('Masaneco')
            ->to($this->industry->email)
            ->with(['email'=>$this->industry->email,'name'=>$this->industry->name])
            ->markdown('emails.orders.industries');
    }
}
