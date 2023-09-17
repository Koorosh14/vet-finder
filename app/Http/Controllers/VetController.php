<?php

namespace App\Http\Controllers;

use App\Models\Vet;

class VetController extends Controller
{
	public function index()
	{
		return view('index', [
			'vets' => Vet::all(),
		]);
	}

	public function show(Vet $vet)
	{
		return view('vets.show', [
			'vet' => $vet,
		]);
	}
}
