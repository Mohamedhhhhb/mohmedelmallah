<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catageries_arbic extends Model
{
    protected $guarded = [];
    public function products_ar()
    {
      return $this->hasMany(Products_arbic::class,'catageries_arbic_id');
    }
    use HasFactory;
}
