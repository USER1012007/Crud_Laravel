<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class incluye extends Model
{
    use HasFactory;
    protected $table = "Incluye";
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $fillable = ['Pedidos_id', 'Productos_codigo', 'cantidad'];
    public function producto()
    {
        return $this->belongsTo(Productos::class, 'Productos_codigo', 'codigo');
    }
    public function pedidos()
    {
        return $this->belongsTo(Pedidos::class, 'Pedidos_id', 'id');
    }
}
