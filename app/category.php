<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
  public function product()
  {
      return $this->hasMany(product::class);
  }

  protected $fillable=['id','categoryname','details','status']; 
}