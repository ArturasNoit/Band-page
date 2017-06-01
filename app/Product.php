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

  public function category()
  {
  	return $this->belongsTo('App\Category');
  }

   public function manufacturer()
  {
  	return $this->belongsTo('App\Manufacturer');
  }
}
