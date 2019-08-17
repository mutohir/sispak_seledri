<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Gejala_Penyakit;
use Validator;

class GejalaPenyakitController extends Controller
{
    public function index()
    {
    	$halaman = 'gejala_penyakit';
    	$daftar_gejala_penyakit = Gejala_Penyakit::all();
		return view('gejala_penyakit.gejala_penyakit', compact('halaman', 'daftar_gejala_penyakit'));
    }

    public function create()
    {
    	$halaman = 'gejala_penyakit';
    	return view('gejala_penyakit.create', compact('halaman'));
    }

    public function show($id)
    {
    	$halaman = 'gejala_penyakit';
    	$daftar_gejala_penyakit = Gejala_Penyakit::find($id);
    	return view('gejala_penyakit.show', compact('halaman', 'daftar_gejala_penyakit'));
    }

    public function store(Request $request)
    {
    	$input = $request->all();

		$validator = Validator::make($input, [
		'kd_gejala' => 'required|unique:gejala_penyakit,kd_gejala',
		'nm_gejala' => 'required'
		]);

		if ($validator->fails()) {
			return redirect('gejala_penyakit/create')
			->withInput()
			->withErrors($validator);
		}

    	Gejala_Penyakit::create($input);
    	return redirect('gejala_penyakit');
    }

    public function edit($id)
    {
    	$halaman = 'gejala_penyakit';
    	$gejala_penyakit = Gejala_Penyakit::find($id);
    	return view('gejala_penyakit.edit', compact('halaman', 'gejala_penyakit'));
    }

    public function update($id, Request $request)
    {
    	$gejala_penyakit = Gejala_Penyakit::find($id);
    	$input = $request->all();

	 //    	$validator = Validator::make($input, [
		// 	'kd_gejala' => 'required|unique:gejala_penyakit,kd_gejala,'. $request->input('id'),
		// 	'nm_penyakit' => 'required',
		// 	]);
		// if ($validator->fails()) {
		// return redirect('gejala_penyakit/create')
		// ->withInput()
		// ->withErrors($validator);
		// }

    	$gejala_penyakit->update($request->all());
            // dd($gejala_penyakit);        
    	return redirect('gejala_penyakit');
    }
		
	public function destroy($id)
    {
    	$gejala_penyakit = Gejala_Penyakit::find($id);
    	$gejala_penyakit->delete();
    	return redirect('gejala_penyakit');
    }

}
