<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	protected $table = 'producto';

    protected $fillable = [
        'id','nombre', 'cantidad', 'fecha_vencimiento', 'numero_lote', 'precio'
    ];
    
    public function factura() {
        return $this->belongsTo('App\Factura');
    }
}
