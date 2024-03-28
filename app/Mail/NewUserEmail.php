<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class NewUserEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        //

        $this->user=$user;

    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('masaneco@masaneco.ae','Masaneco')
            ->subject('New registered user')
            ->to($this->user->email)
            ->to('masaneco@masaneco.ae')
            ->with(['user'=>$this->user])
            ->markdown('emails.user.register');
    }
}
