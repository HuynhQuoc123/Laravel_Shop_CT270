<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    use HasFactory;

    protected $table ="producers";

    public function producer_product(){
        return $this->hasMany('App\Models\Product', 'id_producer','id');
    }
}
