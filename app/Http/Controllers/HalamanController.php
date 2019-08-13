<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HalamanController extends Controller
{
    public function index()
    {
    	$halaman = 'beranda';
		return view('halaman.index', compact('halaman'));
    }

    public function tentang()
    {
    	$halaman = 'tentang';
		return view('halaman.tentang', compact('halaman'));
    }

    public function create()
    {
    	return view('penyakit.create');
    }
}
