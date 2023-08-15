<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $table="my_products";
    use HasFactory;
    protected $primaryKey='product_id';
    // protected $fillable=['product_name','product_price'];
    protected $guarded=[];
    public $timestamps=false;

}
