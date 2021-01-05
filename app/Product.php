<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{

      protected $fillable = ['quantity'];

    public function company() {
        return $this->belongsTo(Company::class);
      }

  
}
