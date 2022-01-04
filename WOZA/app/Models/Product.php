<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function catagory()
    {
        return $this->belongsTo('App\Catagory');
    }
    protected $fillable = [
        'name',
        'quantity',
        'price',
        'catagory_id',
    ];
}
