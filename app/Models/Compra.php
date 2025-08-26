<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $table = 'compra';
    protected $primaryKey = 'id_compra';

    protected $fillable = ['nome_compra', 'total_compra', 'id_tipo_compra_fk', 'pagamento', 'user_id', ];

    public function tipoCompra()
    {
        return $this->belongsTo(TipoCompra::class, 'id_tipo_compra_fk');
    }

    public function itens()
    {
        return $this->hasMany(ItemsCompra::class, 'id_compra_fk');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function items()
    {
        return $this->hasMany(ItemsCompra::class, 'id_compra_fk');
    }
}
