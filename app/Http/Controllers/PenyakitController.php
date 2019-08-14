<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Penyakit;

class PenyakitController extends Controller
{
    public function index()
    {
    	$halaman = 'penyakit';
    	$daftar_penyakit = Penyakit::all();
		return view('penyakit.penyakit', compact('halaman', 'daftar_penyakit'));
    }

    public function create()
    {
    	$halaman = 'penyakit';
    	return view('penyakit.create', compact('halaman'));
    }

    public function show($id)
    {
    	$halaman = 'penyakit';
    	$penyakit = Penyakit::find($id);
    	return view('penyakit.show', compact('halaman', 'penyakit'));
    }

    public function store(Request $request)
    {
    	Penyakit::create($request->all());

    	return redirect('penyakit');

    }
}
