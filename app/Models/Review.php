<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var	array<int, string>
	 */
	protected $fillable = [
		'rate',
		'comment',
	];

	/**
	 * Returns the user who posted this review.
	 *
	 * @return	BelongsTo
	 */
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	/**
	 * Returns the vet where this review was posted for.
	 *
	 * @return	BelongsTo
	 */
	public function vet(): BelongsTo
	{
		return $this->belongsTo(Vet::class);
	}
}
