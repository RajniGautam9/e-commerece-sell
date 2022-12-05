<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
     public function product()
        {
            return $this->hasMany(product::class);
        }

     protected $fillable =['id','brandname','image','details','status'];
}
