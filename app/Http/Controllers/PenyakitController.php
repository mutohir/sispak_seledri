<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PenyakitController extends Controller
{
    public function index()
    {
    	$halaman = 'penyakit';
		return view('penyakit.penyakit', compact('halaman'));
    }

    public function create()
    {
    	return view('penyakit.create');
    }

    public function store(Request $request)
    {
    	$penyakit = $request->all();
    	return $penyakit;
    }
}
