<?php

namespace App\Models;

use App\Http\Controllers\SubcategoryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Subcategory extends Model
{
    use HasTranslations;
    protected $translatable  = ['name'];

    protected $fillable=['name','category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
