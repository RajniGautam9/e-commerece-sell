<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departments extends Model
{
    public function payment()
  {
      return $this->hasMany(payment::class);
  }
   
    protected $fillable=['id','departmentname','Details','status'];
}
