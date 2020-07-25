<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    protected $primaryKey = 'kd';

    public $incrementing = false;

    function aturans() {
		return $this->hasMany('App\Aturan', 'kerusakan_kd');
	}
}
