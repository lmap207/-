<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    /**
     * 手机
     */
    public function phone()
    {
    	return $this->belongsTo('App\Phone');
    	// return $this->hasOne('App\Phone');
    }
}
