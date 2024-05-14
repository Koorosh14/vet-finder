<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vet extends Model
{
	use HasFactory;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var	array<int, string>
	 */
	protected $fillable = [
		'name',
		'description',
		'latitude',
		'longitude',
		'address',
	];

	/**
	 * Returns the user who posted this vet.
	 *
	 * @return	BelongsTo
	 */
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	/**
	 * Returns all the likes that this vet have received.
	 *
	 * @return	HasMany
	 */
	public function likes(): HasMany
	{
		return $this->hasMany(Like::class);
	}

	/**
	 * Returns all the reviews posted for this vet.
	 *
	 * @return	HasMany
	 */
	public function reviews(): HasMany
	{
		return $this->hasMany(Review::class);
	}
}
