<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class godowns extends Model
{
    /**
     * Get the products for the godown.
     */
    public function products()
    {
        return $this->hasMany('App\products','godId');
    }
}