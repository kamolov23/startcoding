<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title','category_id','language_id','author','year','img','description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
