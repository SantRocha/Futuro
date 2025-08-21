<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCompra extends Model
{
    use HasFactory;

    protected $table = 'tipo_compra';
    protected $primaryKey = 'id_tipo_compra';

    protected $fillable = ['nome_tipo_compra', 'user_id'];

    public function compras()
    {
        return $this->hasMany(Compra::class, 'id_tipo_compra_fk');
    }
}
