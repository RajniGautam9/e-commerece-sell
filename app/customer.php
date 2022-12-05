<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable=['id','customername','address','state','country','email','postalcode','status'];
}
