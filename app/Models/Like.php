<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Like extends Model
{
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var	array<int, string>
	 */
	protected $fillable = [
		'is_like',
	];

	/**
	 * Returns the user who submitted this like.
	 *
	 * @return	BelongsTo
	 */
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	/**
	 * Returns the vet where this liked was submitted on.
	 *
	 * @return	BelongsTo
	 */
	public function vet(): BelongsTo
	{
		return $this->belongsTo(Vet::class);
	}
}
