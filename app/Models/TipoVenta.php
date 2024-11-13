<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TipoVenta extends Model
{
    use HasFactory;
    protected $table = "TipoVenta";
    public $timestamps = false;
    protected $primaryKey = 'tipo';
    public $incrementing = false;
    protected $keyType = 'integer';
    protected $fillable = ['tipo', 'descripcion'];
}
