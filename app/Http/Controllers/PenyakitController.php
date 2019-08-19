<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Penyakit;
use Validator;

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
    	$input = $request->all();

		$validator = Validator::make($input, [
		'kd_penyakit' => 'required|unique:penyakit,kd_penyakit',
		'nm_penyakit' => 'required',
		'def_penyakit' => 'required',
		'sol_penyakit' => 'required',
		'np_penyakit' => 'required',
		]);

		if ($validator->fails()) {
			return redirect('penyakit/create')
			->withInput()
			->withErrors($validator);
		}

    	Penyakit::create($input);
    	return redirect('penyakit');

    }

    public function edit($id)
    {
    	$halaman = 'penyakit';
    	$penyakit = Penyakit::find($id);
    	return view('penyakit.edit', compact('halaman', 'penyakit'));
    }

    public function update($id, Request $request)
    {
    	$penyakit = Penyakit::find($id);
    	$input = $request->all();

	    	$validator = Validator::make($input, [
			'kd_penyakit' => 'required|unique:penyakit,kd_penyakit,'. $request->input('id'),
			'nm_penyakit' => 'required',
			'def_penyakit' => 'required',
			'sol_penyakit' => 'required',
			'np_penyakit' => 'required',
			]);

		if ($validator->fails()) {
		return redirect('penyakit/create')
		->withInput()
		->withErrors($validator);
		}

    	$penyakit->update($request->all());
    	return redirect('penyakit');
    }
		
	public function destroy($id)
    {
    	$penyakit = Penyakit::find($id);
    	$penyakit->delete();
    	return redirect('penyakit');
    }
    
}
