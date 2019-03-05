<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    public function company(){
    	return $this->belongsTo(company::class)->withDefault(['name' => '-- Unemployment --']);
    }

    public function getNameAttribute(){
    	return $this->first_name.' '.$this->last_name;
    }

    public function getPhoneAttribute(){
    	return $this->phone1.'-'.$this->phone2.'-'.$this->phone3;
    }
}
