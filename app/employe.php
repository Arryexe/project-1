<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    public function company(){
    	return $this->belongsTo(company::class)->withDefault(['name' => '-- Unemployment --']);
    }
}
