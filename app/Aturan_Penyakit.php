<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aturan_Penyakit extends Model
{
	protected $table = 'aturan_penyakit';

	protected $fillable = 'np';

	public function penyakit()
	{
		return $this->hasMany('App\penyakit','id');
	}
}
