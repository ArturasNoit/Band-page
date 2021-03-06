<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  protected $table = 'cart';
  protected $fillable = [
    'product_id',
    'user_id',
    'quantity'
  ];

  public function user()
  {
  	return $this->belongsTo('App\User');
  }

  public function product()
  {
  	return $this->belongsTo('App\Product');
  }

  public function category()
  {
 
  	return $this->product->belongsTo('App\Category');
  }

  public function manufacturer()
  {
 
    return $this->product->belongsTo('App\Manufacturer');
  }
}
