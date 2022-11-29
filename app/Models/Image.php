<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table ="images";

    public function image_product()
    {
        return $this->belongsTo('App\Models\Product', 'id_product','id');
    }

}
