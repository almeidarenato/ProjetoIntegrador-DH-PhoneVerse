<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = "marcas"; //referencia a tabela que já existe
    protected $primaryKey = "id";
    protected $fillable = ['nome'];

    public function aparelhos()
    {
        return $this->hasMany(Aparelho::class, 'id_marca', 'id');
    }
}
