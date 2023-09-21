<?php

namespace App\Http\Controllers;

use App\Models\Vet;
use Illuminate\Contracts\View\View;

class VetController extends Controller
{
	/**
	 * Displays all vets in the `index` view.
	 *
	 * @return	View
	 */
	public function index()
	{
		return view('index', [
			'vets' => Vet::latest()->filter(request(['search']))->simplePaginate(5),
		]);
	}

	/**
	 * Displays a single vet in the `show` view.
	 *
	 * @param	Vet	$vet
	 *
	 * @return	View
	 */
	public function show(Vet $vet)
	{
		return view('vets.show', [
			'vet' => $vet,
		]);
	}
}
