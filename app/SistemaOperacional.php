<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SistemaOperacional extends Model
{
    protected $table = "sistema_operacional"; //referencia a tabela que já existe
    protected $primaryKey = "id";
    protected $fillable = ['nome', 'versao'];

    public function aparelhos()
    {
        return $this->hasMany(Aparelho::class, 'id_sistemaoperacional', 'id');
    }
}
