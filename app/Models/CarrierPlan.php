<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrierPlan extends Model
{
    use HasFactory;

 protected $fillable = ['carrier_id','plan_name'];

    public function carrier()
		{
		return $this->belongsTo(Carrier::class,'carrier_id','id');
		}

		 public function carrieprice()
          {
            return $this->hasMany(CarrierPrice::class, 'plan_id');
          }
}
