<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processador extends Model
{
    protected $table = "processadores"; //referencia a tabela que já existe
    protected $primaryKey = "id";
    protected $fillable = ['marca', 'modelo'];

    public function aparelhos()
    {
        return $this->hasMany(Aparelho::class, 'id_processador', 'id');
    }
}
