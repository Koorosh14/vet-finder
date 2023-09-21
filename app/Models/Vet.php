<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vet extends Model
{
	use HasFactory;

	public function scopeFilter($query, $filters)
	{
		if ($filters['search'] ?? false)
		{
			$query->where('name', 'like', '%' . request('search') . '%')
				->orWhere('description', 'like', '%' . request('search') . '%')
				->orWhere('address', 'like', '%' . request('search') . '%');
		}
	}
}
