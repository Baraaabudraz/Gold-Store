<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderUser extends Mailable
{
    use Queueable, SerializesModels;

    protected $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        //
        $this->order=$order;

    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('masaneco@masaneco.ae','Masaneco')
            ->subject('New Order')
            ->to($this->order->product->industry->salesperson_email)
            ->with(['product_name'=>$this->order->product->name,'email'=>$this->order->user->email,'mobile'=>$this->order->user->mobile,'quantity'=>$this->order->quantity,'created_at'=>$this->order->created_at->diffForHumans(),'user_name'=>$this->order->user->user_name])
            ->markdown('emails.orders.orderUser');
    }
}
