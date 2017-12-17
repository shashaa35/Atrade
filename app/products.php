<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public function godowns()
	{
    	return $this->belongsTo('App\godowns', 'godId');
	}
}
