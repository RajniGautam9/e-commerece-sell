<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class degination extends Model
{
    public function department()
{
    return $this->belongsTo(departments::class);
}
    public function payment()
    {
        return $this->hasMany(payment::class);
    }
  
    protected $fillable=['id','department_id','deginationname','status'];
}
