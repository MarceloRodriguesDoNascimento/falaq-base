<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
=======
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175

class Pergunta extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['evento_id', 'user_id', 'texto', 'status', 'is_public'];
=======
    protected $fillable = ['evento_id', 'texto', 'status', 'user_id', 'is_public'];
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175

    public function evento(): BelongsTo
    {
        return $this->belongsTo(Evento::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
<<<<<<< HEAD

    public function votos(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function moderacoes(): HasMany
    {
        return $this->hasMany(Moderacao::class);
    }
=======
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
}
