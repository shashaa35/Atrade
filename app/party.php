<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class party extends Model
{
	 protected $table = 'party';
    /**
     * Get the bills for the parties.
     */
    public function bills()
    {
        return $this->hasMany('App\bills','partyId');
    }
}
