<?php

namespace App\Models;

use App\Traits\helpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use function Termwind\renderUsing;

class Category extends Model
{
    use HasTranslations;
    use helpers;
    protected $translatable  = ['name','description'];

    use HasFactory;
    protected $guarded=[];

    public function subcategory(){
         return $this->hasMany(Subcategory::class);
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
    public function categories(){
        return $this->hasMany(Category::class);
    }
}
