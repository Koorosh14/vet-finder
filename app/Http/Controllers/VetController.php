<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VetController extends Controller
{
	public function index()
	{
		return view('index');
	}

	public function show()
	{
		return view('vets.show');
	}
}
