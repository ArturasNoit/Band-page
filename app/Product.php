<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
	protected $fillable = [
	    'title',
	    'description',
	    'quantity',
	    'price',
	    'category_id',
	    'manufacturer_id',
	    'img_url'
  ];
}
