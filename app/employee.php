<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    public function payment()
    {
        return $this->hasMany(payment::class);
    }
    protected $fillable=['id','employeename','image','Address','phone','email','citizen_no','status'];
    
}
