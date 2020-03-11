<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }
}
