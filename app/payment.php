<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model 
{
public function employee()
{
    return $this->belongsTo(employee::class);
}
public function department()
{
    return $this->belongsTo(departments::class);
}
public function degination()
{
    return $this->belongsTo(degination::class);
}

    protected $fillable=['id','employee_id','department_id','degination_id','phone','email','status'];
}
