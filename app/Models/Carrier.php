<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrier extends Model
{
    use HasFactory;

    protected $fillable = ['name','package_type','min_limit','max_limit'];

    public function carrierplan()
          {
            return $this->hasMany(CarrierPlan::class, 'carrier_id');
          }
}
