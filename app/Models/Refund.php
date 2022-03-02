<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','order_id','reason','detail','file','status'];

    public function user()
	{
	  return $this->belongsTo(User::class);
	}
	public function order()
	{
	  return $this->belongsTo(OrderSale::class,'order_id');
	}
}
