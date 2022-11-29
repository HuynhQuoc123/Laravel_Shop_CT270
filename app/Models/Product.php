<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ="products";

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'id_category','id');
    }
    public function producer()
    {
        return $this->belongsTo('App\Models\Producer', 'id_producer','id');
    }

    public function product_image()
    {
        return $this->hasMany('App\Models\Image', 'id_product','id');
    }

}
