<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pedido extends Model
{
    use HasFactory;
    protected $table = "Pedidos";
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $fillable = ['id', 'Destino_clave', 'TipoVenta_tipo', 'C_Distribucion_clave'];
    public function incluye()
    {
        return $this->hasMany(Incluye::class, 'Pedidos_id', 'id');
    }
}
