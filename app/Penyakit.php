<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $table = 'penyakit';

	protected $fillable = [
		'kd_penyakit',
		'nm_penyakit',
		'def_penyakit',
		'sol_penyakit',
		'np_penyakit'
	];
}
