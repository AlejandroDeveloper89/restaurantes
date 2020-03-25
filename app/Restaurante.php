<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    protected $hidden = ['created_at', 'updated_at'];

    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }
}
