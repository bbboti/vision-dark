<?php

namespace App;

use App\Companias;
use App\Clientes;
use App\CodigoProductor;
use App\TipoRiesgo;
use App\EstadoPoliza;
use App\TipoVigencia;

use Illuminate\Database\Eloquent\Model;

class Polizas extends Model
{
    protected $guarded = [];
    
    
    public function companias() {
        return $this->belongsTo(Companias::class, 'compania_id');
    }
    
    public function clientes() {
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }

    public function codigo_productor() {
        return $this->belongsTo(CodigoProductor::class, 'codigo_productor_id');
    }

    public function tipoRiesgo() {
        return $this->belongsTo(TipoRiesgo::class, 'tipo_riesgo_id');
    }

    public function estado_polizas() {
        return $this->belongsTo(EstadoPoliza::class, 'estado_poliza_id');
    }

    public function tipo_vigencias() {
        return $this->belongsTo(TipoVigencia::class, 'tipo_vigencia_id');
    }
}
