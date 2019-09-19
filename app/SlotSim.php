<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlotSim extends Model
{
    protected $table = "slot_sim"; //referencia a tabela que já existe
    protected $primaryKey = "id";
    protected $fillable = ['quantidade'];

    public function aparelhos()
    {
        return $this->hasMany(Aparelho::class, 'id_slotsim', 'id');
    }
}
