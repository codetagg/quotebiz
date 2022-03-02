<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrierPrice extends Model
{
    use HasFactory;

    protected $fillable = ['carrier_id','plan_id','price','description'];

     public function plan()
          {
            return $this->belongsTo(CarrierPlan::class, 'plan_id','id');
          }
}
