<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','category_id','price','stock','discount','count','date_production','best_before_date','production_country','production_company','barcode','compound','image','unit','guarantee','loader','driver','description'];

     public function category()
     {
      return $this->belongsTo(Category::class);
     }


}
