<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->hasOne(Product::class,'id','product_id');
    }
    public function industry()
    {
        return $this->hasOne(Industry::class,'industry_id','id');
    }
}

