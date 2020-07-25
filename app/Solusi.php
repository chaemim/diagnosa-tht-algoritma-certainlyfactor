<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solusi extends Model
{
    protected $primaryKey = 'kd';

    public $incrementing = false;

    function aturans() {
		return $this->hasMany('App\Aturan', 'solusi_kd');
	}
}
