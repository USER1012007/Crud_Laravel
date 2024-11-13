<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table = "Productos";
    public $timestamps = false;
    protected $primaryKey = 'codigo';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $fillable = ['codigo', 'descripcion', 'precio'];
    public function incluye()
    {
        return $this->hasMany(Incluye::class, 'Productos_codigo', 'codigo');
    }
}
