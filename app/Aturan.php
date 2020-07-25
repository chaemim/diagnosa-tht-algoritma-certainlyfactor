<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aturan extends Model
{	
	function kerusakan() {
		return $this->belongsTo('App\Kerusakan', 'kerusakan_kd');
	}

	function gejala() {
		return $this->belongsTo('App\Gejala', 'gejala_kd');
	}

	function solusi() {
		return $this->belongsTo('App\Solusi', 'solusi_kd');
	}

	public function getKerusakanListAttribute()
    {
        return $this->kerusakan->kd;
    } 

    public function getGejalaListAttribute()
    {
        return $this->gejala->kd;
    } 

    public function getSolusiListAttribute()
    {
        return $this->solusi->kd;
    } 
}
