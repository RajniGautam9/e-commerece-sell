<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    public function product()
  {
      return $this->hasMany(product::class);
  }
    protected $fillable=['storename','address','phone','email','details','status'];
}
