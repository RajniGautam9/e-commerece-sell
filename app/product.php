<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class product extends Model
{
    public function brand()
        {
            return $this->belongsTo(brand::class);
        }
        public function category()
        {
            return $this->belongsTo(category::class);
        }

        public function store()
        {
            return $this->belongsTo(store::class);
        }

    protected $fillable= [ 'id','name','store_id','image','brand_id','category_id','details','status'];
}
