<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;
use App\Producto;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = Factura::where('estado',true)->orderBy('id', 'ASC')->get();
        return view('factura')
                ->with('facturas', $facturas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $factura = new Factura($request->all());
        $producto = Producto::find($request->id_producto);
        $cantidadFinal = (int)$producto->cantidad - (int)$factura->cantidad;
        if($cantidadFinal>0){
            $producto->cantidad = $cantidadFinal;
            $producto->save();
        } else {
            $producto->cantidad = 0;
            $producto->estado = false;
            $producto->save();
        }
        $factura->save();
        return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $factura = Factura::find($id);
        $producto = Producto::find($factura->id_producto);
        $cantidadFinal = (int)$producto->cantidad + (int)$factura->cantidad;
        $factura->estado = false;
        $producto->save();
        $factura->save();
    }
}
