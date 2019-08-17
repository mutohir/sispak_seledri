<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gejala_Penyakit extends Model
{
    protected $table = 'gejala_penyakit';

	protected $fillable = [
		'kd_gejala',
		'nm_gejala'
	];
}
