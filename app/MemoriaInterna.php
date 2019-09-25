<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemoriaInterna extends Model
{
    protected $table = "memoria_interna"; //referencia a tabela que já existe
    protected $primaryKey = "id";
    protected $fillable = ['quantidade'];

    public function aparelhos()
    {
        return $this->hasMany(Aparelho::class, 'id_memoriainterna', 'id');
    }
}
