<?php

namespace App\Http\Controllers;

use App\Models\Vet;
use Illuminate\Http\Request;

class VetController extends Controller
{
	public function index()
	{
		return view('index', [
			'vets' => Vet::all(),
		]);
	}

	public function show()
	{
		return view('vets.show');
	}
}
