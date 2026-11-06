<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
=======
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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

<<<<<<< HEAD
    public function perguntas(): HasMany
    {
        return $this->hasMany(Pergunta::class);
    }

=======
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
    public function eventos(): HasMany
    {
        return $this->hasMany(Evento::class);
    }

<<<<<<< HEAD
    public function perguntasVotadas(): BelongsToMany
    {
        return $this->belongsToMany(Pergunta::class, 'pergunta_user')->withTimestamps();
    }
=======
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
}
