<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //
    protected $table = 'factura';

    protected $fillable = [
        'id','id_producto', 'cantidad', 'valor_total',
    ];
    
    public function producto() {
        return $this->belongsTo('App\Producto');
    }
}
