<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Marca;
use App\Processador;
use App\MemoriaRam;
use App\MemoriaInterna;
use App\SistemaOperacional;
use App\SlotSim;

class Aparelho extends Model
{
    protected $table = "aparelhos"; //referencia a tabela que já existe
    protected $primaryKey = "id";
    protected $fillable = [
        'id_marca', 'modelo', 'id_processador', 'id_memoriainterna', 'id_memoriaram', 'camerafrontal', 'cameratraseira', 'id_sistemaoperacional', 'id_slotsim', 'preco', 'imagem', 'bateria'
    ];
    public function marca()
    {
        return $this->hasOne(Marca::class, 'id', 'id_marca');
    }
    public function processador()
    {
        return $this->hasOne(Processador::class, 'id', 'id_processador');
    }
    public function memoriainterna()
    {
        return $this->hasOne(MemoriaInterna::class, 'id', 'id_memoriainterna');
    }
    public function memoriaram()
    {
        return $this->hasOne(MemoriaRam::class, 'id', 'id_memoriaram');
    }
    public function sistemaoperacional()
    {
        return $this->hasOne(SistemaOperacional::class, 'id', 'id_sistemaoperacional');
    }
    public function slotsim()
    {
        return $this->hasOne(SlotSim::class, 'id', 'id_slotsim');
    }
}
