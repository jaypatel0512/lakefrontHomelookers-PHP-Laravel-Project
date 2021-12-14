<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'houseType', 'price', 'estPrice','saleType','area'
        ,'country','state','city','zip'
        ,'buildYear','bedrooms','bathrooms','image','description'
    ];
}
