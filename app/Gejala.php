<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    protected $primaryKey = 'kd';

    public $incrementing = false;

    function aturans() {
		return $this->hasMany('App\Aturan', 'gejala_kd');
	}
}
