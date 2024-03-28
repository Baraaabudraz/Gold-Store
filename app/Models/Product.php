<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasTranslations;
    protected $translatable  = ['name'   ,'description' , 'additional_info'];

    protected $guarded = [];
    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
