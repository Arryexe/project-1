<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    
	public function employes(){
		return $this->hasMany(employe::class);
	}

}
