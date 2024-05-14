<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
		'username',
        'email',
        'password',
		'is_admin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

	/**
	 * Returns all the vets that this user have posted.
	 *
	 * To test and see if this is working:
	 * 		php artisan tinker
	 * 		\App\Models\User::all()->get(0)->vets
	 *
	 * @return	HasMany
	 */
	public function vets(): HasMany
	{
		return $this->hasMany(Vet::class);
	}

	/**
	 * Returns all the likes that this user have submitted.
	 *
	 * @return	HasMany
	 */
	public function likes(): HasMany
	{
		return $this->hasMany(Like::class);
	}

	/**
	 * Returns all the reviews that this user have posted.
	 *
	 * @return	HasMany
	 */
	public function reviews(): HasMany
	{
		return $this->hasMany(Review::class);
	}
}
