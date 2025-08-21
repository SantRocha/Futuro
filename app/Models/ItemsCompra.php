<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsCompra extends Model
{
    use HasFactory;

    protected $table = 'items_compra';
    protected $primaryKey = 'id_item';

    protected $fillable = ['nome_item', 'preco_item', 'quantidade_item', 'id_compra_fk'];

    public function compra()
    {
        return $this->belongsTo(Compra::class, 'id_compra_fk');
    }
}
