<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;
=======
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175
use Illuminate\Database\Eloquent\Relations\HasMany;

class Evento extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['user_id', 'titulo', 'descricao', 'data_evento'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
=======
    protected $fillable = ['titulo', 'descricao', 'data_evento', 'user_id'];
>>>>>>> 2040cdaf2bedf48eacfc0dada965c0bb7f99f175

    public function perguntas(): HasMany
    {
        return $this->hasMany(Pergunta::class);
    }
}
