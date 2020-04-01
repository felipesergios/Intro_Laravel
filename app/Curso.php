<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
//Campos que o Laravel pode mexer em massa
{
    protected $fillable = [
        'titulo', 'descricao', 'valor','imagem','publicado'
    ];
}
