<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
	protected $fillable = ['name', 'price','desc','qty','godId'];

    public function godowns()
	{
    	return $this->belongsTo('App\godowns', 'godId');
	}
}
