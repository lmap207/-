<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    /**
     * 参数
     */
    /*
    public function parameter()
    {
        return $this->hasOne('App\Parameter');
    }
    */

	/*
	 * 品牌
	 */
    public function brand()
    {
    	return $this->belongsTo('App\Brand');
    }

    /**
     * 型号
     */
    public function xinghao()
    {
    	return $this->belongsTo('App\Xinghao');
    }

    /**
     * 类型
     */
    public function type()
    {
    	return $this->belongsTo('App\Type');
    }

    /**
     * 颜色
     */
    public function color()
    {
    	return $this->belongsTo('App\Color');
    }

    /**
     * 内存
     */
    public function memory()
    {
    	return $this->belongsTo('App\Memory');
    }
}
