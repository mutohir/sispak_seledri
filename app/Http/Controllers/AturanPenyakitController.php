<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AturanPenyakitController extends Controller
{
    public function index()
    {
    	$halaman = 'aturan_penyakit';
    	return view('aturan_penyakit.aturan_penyakit', compact('halaman'));
    }

    public function aturan_penyakit()
    {
    	return $this->belongsToMany('App\aturan_penyakit', 'id_penyakit');
    }
}
