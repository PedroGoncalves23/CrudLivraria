<?php

namespace App\Models;

use App\Models\Autor;
use App\Models\Midia;
use App\Models\Editora;
use App\Models\Comentario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livro extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'idioma', 'ano', 'isbn', 'capa', 'editora_id'];

    public function midia()
    {
        return $this->hasOne(Midia::class);
    }

    public function editora()
    {
        return $this->belongsTo(Editora::class);
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }

    public function autores()
    {
        return $this->hasMany(Autor::class);
    }

}

